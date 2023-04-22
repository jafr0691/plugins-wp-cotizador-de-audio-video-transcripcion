<?php
include_once __DIR__ . "/../src/conec.php";
$title = $_POST['folder_links'];
$hora  = $_POST['hora'];
$minut = $_POST['minut'];
$Dseg  = $_POST['seg'];
$id    = rand();
if (empty($hora)) {
    $hora = 0;
}
if (empty($minut)) {
    $minut = 0;
}
if (empty($Dseg)) {
    $Dseg = 0;
}
$tiempo = $hora.":".$minut.":".$Dseg;

$td = $hora+$minut+$Dseg;

if ($td!=0) {
    if (preg_match('/^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/', $tiempo)) {
        function hora_a_segundos($hora)
        {
            list($h, $m, $s) = explode(':', $hora);
            return ($h * 3600) + ($m * 60) + $s;
        }
        $seg = hora_a_segundos($tiempo);
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
                } else if ($horas == "") {
                    $hora_texto .= "00:";
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
            } else if ($till == 2) {
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
            } else if ($till == 3) {
                $hora_texto = "";
                if ($horas > 0) {
                    $hora_texto .= $horas . ".";
                }
                if ($minutos > 0) {
                    $hora_texto .= $minutos . ",";
                }
                if ($segundos > 0) {
                    $hora_texto .= $segundos;
                }
            }
            return $hora_texto;
        }
        $duration        = round($seg);
        $duration_humans = conversorSegundosHoras($seg, 2);
        $duration_till   = conversorSegundosHoras($seg, 1);
        $stmt = $dbh->prepare("INSERT INTO $taudio (item_id, original_filename, original_duration, comment, download, duration_for_humans, till_human, link, duration, order_id, negado) VALUES (:id, :filename, :duration, :comment, :download, :dura_hum, :till_human, :link, :dura, :order_id, :negado)");
        if ($stmt->execute(array(':id' => $id, ':filename' => $title, ':duration' => $duration, ':comment' => '', ':download' => $title, ':dura_hum' => $duration_humans, 'till_human' => $duration_till, 'link' => 1, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 2))) {
            $data    = array('duration' => $duration, 'download' => $title, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $title, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 2, 'msj' => 'bien');
            $carpeta = "../update-unpaid-order/uploads/" . $visitor;
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
                chmod($carpeta, 0777);
            }
            $enlaces = '';
            $salto = chr(13) . chr(10);
            if (!is_file("../update-unpaid-order/uploads/" . $visitor . "/enlaces.txt")) {
                $file = fopen("../update-unpaid-order/uploads/" . $visitor . "/enlaces.txt", "w");
                $enlaces .= 'Estos son los enlaces subidos por el cliente y sus tiempo de Duracion: ' . $salto;
            } else {
                $file = fopen("../update-unpaid-order/uploads/" . $visitor . "/enlaces.txt", "a");
            }

            $enlaces .= $salto . '[[ Enlace: ' . $title . ' ] [ Duration: ' . $duration_humans . ' ]' . $salto;
            $enlaces .= ' [ Commentario : Sin comentario.  ]]' . $salto;
            $enlaces .= ' [ ------------------------------------------ ]' . $salto;
            fwrite($file, $enlaces . PHP_EOL);
            fclose($file);
        } else {
            $data = array('msj' => 'error');
        }
    } else {
        $data = array('msj' => 'error');
    }
} else {
        $data = array('msj' => 'errortime');
    }
exit(json_encode($data));