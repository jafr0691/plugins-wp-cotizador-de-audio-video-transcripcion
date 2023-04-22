<?php
include_once __DIR__ . "/src/conec.php";
$text_format  = $_POST['text_format'];
$timestamping = $_POST['timestamping'];
$subtitle     = $_POST['subtitle'];
$speaker      = $_POST['speakers'];
$tat          = $_POST['tat'];
// $language     = $_POST['language'];
$low_quality = $_POST['low_quality'];
if (isset($_POST['external_minutes'])) {
    $external_minutes = $_POST['external_minutes'];
}
function hora_a_segundos($hora)
{
    list($h, $m, $s) = explode(':', $hora);
    return ($h * 3600) + ($m * 60) + $s;
}
function conversorSegundosHoras($tiempo_en_segundos)
{
    $horas    = floor($tiempo_en_segundos / 3600);
    $minutos  = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
    $segundos = round($tiempo_en_segundos - ($horas * 3600) - ($minutos * 60));
    if ($horas > 0) {
        $tohor = $horas * 60;
    } else {
        $tohor = 0;
    }
    $se = round($segundos * 1.6);
    $tmin  = $tohor + $minutos;
    $total = $tmin . '.' . $se;
    return $total;
}
$archivos = 0;
if($_POST['presupuesto']=="Archivo de muestra"){
    $min    = conversorSegundosHoras(hora_a_segundos($_POST['external_minutes']));
    $seg = hora_a_segundos($_POST['external_minutes']);
}else{
    $durat_audio = $dbh->prepare("SELECT duration FROM $taudio where order_id=:o_id");
    $durat_audio->execute(array(':o_id' => $visitor));
    $resultado = $durat_audio->fetchAll(PDO::FETCH_ASSOC);
    $seg       = 0;
    foreach ($resultado as $tiempo) {
        $seg = $seg + $tiempo['duration'];
        $archivos = $archivos+1;
    }
    $min    = conversorSegundosHoras($seg);
}
if($min>0){
    //$precio = $min * 0.65;
    if ($text_format == 'clean_verbatim') {
        $preTxt = 0;
    } else {
        $preTxt = $min * 0.166;
    }
    if ($tat == 'normal') {
        $preTat = $min * 0.666;
    } else if ($tat == 'rapido') {
        $preTat = $min * 0.833;
    } else if ($tat == 'express') {
        $preTat = $min * 0.999;
    } else if ($tat == 'horas') {
        $preTat = $min * 1.166;
    }
    if ($speaker == 'no') {
        $preSpea = 0;
    } else if ($speaker == 'si') {
        $preSpea = $min * 0.066;
    }
    $preQual = 0;
    if ($low_quality == 'si') {
        $preQual = $min * 0.433;
    }
    $presubti = 0;
    if ($subtitle == 'si') {
        $presubti = $min * 0.399;
    }
    $preTimT = 0;
    if ($timestamping != 'not_required') {
        $preTimT = $min * 0.066;
    }
    $precioComple = ($preTxt + $preTat + $preSpea + $preQual + $presubti + $preTimT)*1.21;
    for ($i=0; $i < $archivos; $i++) {
        if ($i>=5) {
            $precioComple = $precioComple+0.500;
        }
    }
    setlocale(LC_MONETARY, 'it_IT');
    $subtotal = money_format('%.2n', $precioComple);
    $total = str_replace('EUR', '', $subtotal);
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM $tordaudi where order_id = ?");
    $stmt->execute([$visitor]);
    $count = $stmt->fetchColumn();
    if ($count == 0) {
        $stmt = $dbh->prepare("INSERT INTO $tordaudi (order_id, text_format, timestamping, subtitle, speaker, tat, low_quality, external_minutes, total_min) VALUES (:id, :text_format, :timestamping, :subtitle, :speaker, :tat, :low_quality, :external_minutes, :total_min)");
        $stmt->execute(array(':id' => $visitor, ':text_format' => $text_format, ':timestamping' => $timestamping, ':subtitle' => $subtitle, ':speaker' => $speaker, ':tat' => $tat, ':low_quality' => $low_quality, ':external_minutes' => $external_minutes, ':total_min' => $min));
         $stmt = $dbh->prepare("INSERT INTO $tordaudi (order_id, text_format, timestamping, subtitle, speaker, tat, low_quality, external_minutes, total_min, archivos) VALUES (:id, :text_format, :timestamping, :subtitle, :speaker, :tat, :low_quality, :external_minutes, :total_min, :archivos)");
        $stmt->execute(array(':id' => $visitor, ':text_format' => $text_format, ':timestamping' => $timestamping, ':subtitle' => $subtitle, ':speaker' => $speaker, ':tat' => $tat, ':low_quality' => $low_quality, ':external_minutes' => $external_minutes, ':total_min' => $min, ':archivos'=>$archivos));
    } else {
        $audiodb = $dbh->prepare("UPDATE $tordaudi SET text_format= :text_format, timestamping =:timestamping, subtitle =:subtitle , speaker =:speaker ,tat =:tat, low_quality =:low_quality,  external_minutes =:external_minutes, total_min =:total_min where order_id=:order_id");
        $audiodb->execute(array(':order_id' => $visitor, ':text_format' => $text_format, ':timestamping' => $timestamping, ':subtitle' => $subtitle, ':speaker' => $speaker, ':tat' => $tat, ':low_quality' => $low_quality, ':external_minutes' => $external_minutes, ':total_min' => $min));
    }
} else {
    $total = $_POST['external_minutes'];
}
if ($min < 1) {
    $total = '';
}
$data = array('text_format' => $text_format,
    'timestamping'              => $timestamping,
    'subtitle'                  => $subtitle,
    'speakers'                  => $speaker,
    'tat'                       => $tat,
    'low_quality'               => $low_quality,
    'discount'                  => '',
    'subtotal'                  => '',
    'you_save'                  => '',
    'total'                     => $total,
    'words'                     => '',
    'minutes'                   => $seg,
    'presupuesto'               => $_POST['presupuesto'],
    'external_minutes'          => '',
    'min'                       => $min);
exit(json_encode($data));