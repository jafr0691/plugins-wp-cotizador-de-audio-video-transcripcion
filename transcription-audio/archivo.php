<?php
include_once "./src/conec.php";
include_once "./vendor/autoload.php";

use Dilab\Network\SimpleRequest;
use Dilab\Network\SimpleResponse;
use Dilab\Resumable;

$request  = new SimpleRequest();
$response = new SimpleResponse();

$resumable = new Resumable($request, $response);

function elimina_acentos($text)
{
    $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
       // $text = strtolower($text);
    $patron = array (
            // Espacios, puntos y comas por guion
            //'/[\., ]+/' => ' ',

            // Vocales
        '/\+/' => '',
        '/&agrave;/' => 'a',
        '/&egrave;/' => 'e',
        '/&igrave;/' => 'i',
        '/&ograve;/' => 'o',
        '/&ugrave;/' => 'u',

        '/&aacute;/' => 'a',
        '/&eacute;/' => 'e',
        '/&iacute;/' => 'i',
        '/&oacute;/' => 'o',
        '/&uacute;/' => 'u',

        '/&acirc;/' => 'a',
        '/&ecirc;/' => 'e',
        '/&icirc;/' => 'i',
        '/&ocirc;/' => 'o',
        '/&ucirc;/' => 'u',

        '/&atilde;/' => 'a',
        '/&etilde;/' => 'e',
        '/&itilde;/' => 'i',
        '/&otilde;/' => 'o',
        '/&utilde;/' => 'u',

        '/&auml;/' => 'a',
        '/&euml;/' => 'e',
        '/&iuml;/' => 'i',
        '/&ouml;/' => 'o',
        '/&uuml;/' => 'u',


            // Otras letras y caracteres especiales
        '/&aring;/' => 'a',
        '/&ntilde;/' => 'n',

            // Agregar aqui mas caracteres si es necesario

    );

    $text = preg_replace(array_keys($patron),array_values($patron),$text);
    return $text;
}

$rename = 0;
if (isset($_FILES['file']) OR isset($_POST['resumableFilename']) OR isset($_GET['resumableFilename'])) {
	if (isset($_POST['resumableFilename'])){
		$name = $_POST['resumableFilename'];
        $path = $_POST['resumableRelativePath'];
	}else{
		$name = $_GET['resumableFilename'];
        $path = $_GET['resumableRelativePath'];
	}


    if (stristr($name, " ")) {
        $cambnameespacio = str_replace(' ', '-', $name);
        $cambname = elimina_acentos($cambnameespacio);
        $rename   = 1;
    } else {
        $cambname = elimina_acentos($name);
        $rename   = 0;
    }

    $info = new SplFileInfo($name);
    $id   = rand();
    if ($info->getExtension() != 'jpg' and $info->getExtension() != 'png' and $info->getExtension() != 'gif' and $info->getExtension() != 'bmp' and $info->getExtension() != 'tif' and $info->getExtension() != 'text') {
        $carpeta = "./update-unpaid-order/uploads/" . $visitor;
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
            chmod($carpeta, 0777);
        }

        $from = "./update-unpaid-order/empty";
        $to   = $carpeta . "/empty";

        copy($from, $to);

        // $rutaDeLAudio = $carpetaAudio . "" . $name;
        $resumable->tempFolder   = 'tmps';
        $resumable->uploadFolder = "update-unpaid-order/uploads/" . $visitor;
        $resumable->process();


        if (true === $resumable->isUploadComplete()) {
            // true when the final file has been uploaded and chunks reunited.

        	if ($rename == 1) {
            if(is_file($carpeta . "/" . $name)){
                rename($carpeta . "/" . $name, $carpeta . "/" . $cambname);
            }
	        }else{
	            if(is_file($carpeta . "/" . $name)){
	                rename($carpeta . "/" . $name, $carpeta . "/" . $cambname);
	            }
	        }

	        $ruta = "/wp-content/plugins/calculadora-transcription/transcription-audio/update-unpaid-order/uploads/" . $visitor . "/" . $cambname;

            $result = shell_exec('ffmpeg -i ' . escapeshellcmd($carpeta . "/" . $cambname) . ' 2>&1');

            preg_match('/(?<=Duration: )(\d{2}:\d{2}:\d{2})\.\d{2}/', $result, $match);
            if ($info->getExtension() == 'aac'){
                is_null($match[1]=null;
            }
            if (!is_null($match[1])) {
                function hora_a_segundos($hora)
                {
                    list($h, $m, $s) = explode(':', $hora);
                    return ($h * 3600) + ($m * 60) + $s;
                }

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

                if ($stmt->execute(array(':id' => $id, ':filename' => $cambname, ':duration' => $duration, ':comment' => '', ':download' => $ruta, ':dura_hum' => $duration_humans, 'till_human' => $duration_till, 'link'=> 0, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 0))) {
                    $data = array('duration' => $duration, 'download' => $ruta, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $name, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 0, 'msj' => 'bien', 'rutapath' => $path);
                    exit(json_encode($data));
                }
            }else{
                $duration        = 0;
                $duration_humans = 0;
                $duration_till   = 0;
                $stmtt = $dbh->prepare("INSERT INTO $taudio (item_id, original_filename, original_duration, comment, download, duration_for_humans, till_human, link, duration, order_id, negado) VALUES (:id, :filename, :duration, :comment, :download, :dura_hum, :till_human, :link, :dura, :order_id, :negado)");

                if ($stmtt->execute(array(':id' => $id, ':filename' => $cambname, ':duration' => $duration, ':comment' => '', ':download' => $ruta, ':dura_hum' => $duration_humans, 'till_human' => $duration_till, 'link'=> 0, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 1))) {
                    $data = array('duration' => $duration, 'download' => $ruta, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $cambname, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 1, 'msj' => 'error');
                    exit(json_encode($data));
                }
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
            $data = array('name' => $name, 'msj' => 'error', 'rutapath' => $path);
            exit(json_encode($data));
        }
    }
}