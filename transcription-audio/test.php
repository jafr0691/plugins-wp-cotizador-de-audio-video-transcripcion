<?php

$visitor = '';
$name = '';


if (stristr($name, " ")) {
        $cambnameespacio = str_replace(' ', '-', $name);
        $cambname = elimina_acentos($cambnameespacio);
        $rename   = 1;
    } else {
        $cambname = elimina_acentos($name);
        $rename   = 0;
    }

$carpeta = "./update-unpaid-order/uploads/" . $visitor;

$result = shell_exec('ffmpeg -i ' . escapeshellcmd($carpeta . "/" . $cambname) . ' 2>&1');
            preg_match('/(?<=Duration: )(\d{2}:\d{2}:\d{2})\.\d{2}/', $result, $match);
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

                echo 'duracion: '.$duration.'<br> humanos: '.$duration_humans.' <br> till: '.$duration_till;
}else{

	echo 'no posee fmpeg';

}



 ?>