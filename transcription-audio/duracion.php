<?php
//directorio del la clase que conecta a la base de datos y el id del visitor
include_once __DIR__ . "/src/conec.php";
$item_id = $_POST['object_id'];
$type    = $_POST['type'];
$from    = $_POST['from'];
$till    = $_POST['till'];

$audiodbs = $dbh->prepare("SELECT * FROM $taudio where item_id=:id");
if ($audiodbs->execute(array(':id' => $item_id))) {
    $resultado = $audiodbs->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $audiox) {
        $rutaDeLAudio = __DIR__ . "/update-unpaid-order/uploads/" . $audiox['order_id'] . "/" . $audiox['original_filename'];
    }
}
$rutacorte = __DIR__ . "/update-unpaid-order/uploads/" . $audiox['order_id'] . "/cort-".$audiox['original_filename'];
if (file_exists($rutacorte)) {
unlink($rutacorte);
}
if (preg_match('/^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/', $till) and preg_match('/^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/', $from)) {

function hora_a_segundos($hora)
{
    list($h, $m, $s) = explode(':', $hora);
    return ($h * 3600) + ($m * 60) + $s;
}

$cort_from = hora_a_segundos($from);

$cort_till = hora_a_segundos($till);

    shell_exec('ffmpeg -i ' .$rutaDeLAudio. ' -ss '.$cort_from.' -t '.$cort_till.' '.$rutacorte);

    $result = shell_exec('ffmpeg -i ' . escapeshellcmd($rutacorte) . ' 2>&1');
preg_match('/(?<=Duration: )(\d{2}:\d{2}:\d{2})\.\d{2}/', $result, $match);

    $seg = hora_a_segundos($match[1]);
    function conversorSegundosHoras($tiempo_en_segundos, $till)
    {
        $horas    = floor($tiempo_en_segundos / 3600);
        $minutos  = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
        $segundos = round($tiempo_en_segundos - ($horas * 3600) - ($minutos * 60));
        if ($till == 1) {
            $hora_texto = "";

            if ($horas <= 0) {
                $hora_texto .= "00:";
            } else if ($horas > 0 and $horas < 10) {
                $hora_texto .= "0" . $horas . ":";
            } else {
                $hora_texto .= $horas . ":";
            }

            if ($minutos < 0) {
                $hora_texto .= "00:";
            } else if ($minutos > 0 and $minutos < 10) {
                $hora_texto .= "0" . $minutos . ":";
            } else if ($minutos == "") {
                $hora_texto .= "00:";
            } else {
                $hora_texto .= $minutos . ":";
            }

            if ($segundos < 0) {
                $hora_texto .= "00";
            } else if ($segundos > 0 and $segundos < 10) {
                $hora_texto .= "0" . $segundos . "";
            } else if ($segundos == "") {
                $hora_texto .= "00";
            } else {
                $hora_texto .= $segundos;
            }

        } else {
            $hora_texto = "";
            if ($horas > 0) {
                $hora_texto .= $horas . "h ";
            }

            if ($minutos > 0) {
                $hora_texto .= $minutos . "m ";
            }

            if ($segundos > 0) {
                $hora_texto .= $segundos . "s";
            }
        }
        return $hora_texto;
    }
    // $seg = 100;
    $duration        = round($seg);
    $duration_humans = conversorSegundosHoras($seg, 2);
    $duration_till   = conversorSegundosHoras($seg, 1);
    
    $audiodb         = $dbh->prepare("UPDATE $taudio SET duration=:durat, duration_for_humans=:durat_hum, till_human= :durat_till where item_id=:id");
    $audiodb->execute(array(':id' => $item_id, ':durat' => $duration, ':durat_hum' => $duration_humans, ':durat_till' => $duration_till));

    $audio = array('object_id' => $item_id,
        'type'                     => $type,
        'from_human'               => $from,
        'till_human'               => $till,
        'duration_for_humans'      => $duration_humans,
        'duration'                 => $duration);
} else {
    $audio = array('object_id' => $item_id,
        'type'                     => $type,
        'from_human'               => $from,
        'till_human'               => $till,
        'duration_for_humans'      => '',
        'duration'                 => '');
}

exit(json_encode($audio));