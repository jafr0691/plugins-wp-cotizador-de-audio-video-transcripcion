<?php
include_once  "./src/conec.php";
include_once "./vendor/autoload.php";

use Dilab\Network\SimpleRequest;
use Dilab\Network\SimpleResponse;
use Dilab\Resumable;

$request  = new SimpleRequest();
$response = new SimpleResponse();

$resumable = new Resumable($request, $response);

$hora = $_POST['hora'];
$min  = $_POST['min'];
$Dseg = $_POST['seg'];
$id      = rand();

$tiempo = $hora.":".$min.":".$Dseg;
if (isset($_FILES['file'])) {
    $name    = $_POST['resumableFilename'];
    if (stristr($name, " ")) {
        $cambname = str_replace(' ', '-', $name);
        $rename   = 1;
    } else {
        $cambname = $name;
        $rename   = 0;
    }
    $info    = new SplFileInfo($name);
    if ($info->getExtension() != 'jpg' and $info->getExtension() != 'png' and $info->getExtension() != 'gif' and $info->getExtension() != 'bmp' and $info->getExtension() != 'tif') {
        $carpeta =  "./update-unpaid-order/uploads/" . $visitor;
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
            chmod($carpeta, 0777);
        }

        $from =  "./update-unpaid-order/empty";
        $to   = $carpeta . "/empty";

        copy($from, $to);

        // $rutaDeLAudio = $carpetaAudio . "" . $name;
        $resumable->tempFolder   = 'tmps';
        $resumable->uploadFolder = "update-unpaid-order/uploads/" . $visitor;
        $resumable->process();

        $ruta = "/wp-content/plugins/calculadora-transcription/transcription-audio/update-unpaid-order/uploads/" . $visitor . "/" . $name;

        if (true === $resumable->isUploadComplete()) {

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

            if ($stmt->execute(array(':id' => $id, ':filename' => $name, ':duration' => $duration, ':comment' => '', ':download' => $ruta, ':dura_hum' => $duration_humans, 'till_human' => $duration_till, 'link' => 0, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 1))) {
                $data = array('duration' => $duration, 'download' => $ruta, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $name, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 1);
                exit(json_encode($data));
            }
        }else{
            if (is_file('./update-unpaid-order/uploads/' .$visitor.'/empty')) {
                unlink('./update-unpaid-order/uploads/' .$visitor.'/empty');
            }


            if ($rename == 1) {
                if (is_file('./update-unpaid-order/uploads/' . $visitor.'/'.$cambname)) {
                    unlink('./update-unpaid-order/uploads/' . $visitor.'/'.$cambname);
                }
            }else{
                if (is_file('./update-unpaid-order/uploads/' . $visitor.'/'.$name)) {
                    unlink('./update-unpaid-order/uploads/' . $visitor.'/'.$name);
                }

            }
            $carpeta = './update-unpaid-order/uploads/' .$visitor;

            $is_empty = (bool) (count(scandir($carpeta)) == 2);

            if ($is_empty) {

                rmdir($carpeta);

            }
            $data = array('name' => $name);
            exit(json_encode($data));
        }
    }
}