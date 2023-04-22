<?php
include_once  "./src/conec.php";

$id = $_POST['id'];
$name  = $_POST['filename'];
$hora = $_POST['hora'];
$min  = $_POST['min'];
$Dseg = $_POST['seg'];
if (empty($hora)) {
    $hora = 0;
}
if (empty($min)) {
    $min = 0;
}
if (empty($Dseg)) {
    $Dseg = 0;
}
$tiempo = $hora.":".$min.":".$Dseg;

$td = $hora+$min+$Dseg;

if ($td!=0) {

    if(empty($_POST['eliminar'])){

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

                $audiodb         = $dbh->prepare("UPDATE $taudio SET original_duration=:ordurat, duration=:durat, duration_for_humans=:durat_hum, till_human= :durat_till where item_id=:id and original_filename=:name");
                $audiodb->execute(array(':id' => $id,':name' => $name, ':durat' => $duration, ':ordurat' => $duration, ':durat_hum' => $duration_humans, ':durat_till' => $duration_till));

                $stmt = $dbh->prepare("SELECT * FROM $taudio where item_id = ?");
                $stmt->execute([$id]);
                while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    $data = array('duration' => $row->duration, 'download' => $row->download, 'original_duration' => $row->original_duration, 'comment' => '', 'original_filename' => $row->original_filename, 'duration_for_humans' => $row->duration_for_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $row->duration, 'till_human' => $row->till_human, 'id' => $row->item_id, 'negado' => 1, 'msj'=> 'bien');
                }

                exit(json_encode($data));

        }else{

            $stmtdelet = $dbh->prepare("DELETE FROM $taudio WHERE item_id =  :filmID");
            $stmtdelet->bindParam(':filmID', $id, PDO::PARAM_INT);
            $stmtdelet->execute();

                if (is_file('./update-unpaid-order/uploads/' .$visitor.'/empty')) {
                    unlink('./update-unpaid-order/uploads/' .$visitor.'/empty');
                }


                if (is_file('./update-unpaid-order/uploads/' . $visitor.'/'.$name)) {
                    unlink('./update-unpaid-order/uploads/' . $visitor.'/'.$name);
                }

                $carpeta = ('./update-unpaid-order/uploads/' .$visitor);

                $is_empty = (bool) (count(scandir($carpeta)) == 2);

                if ($is_empty) {

                    rmdir($carpeta);

                }
                $data = array('original_filename' => $name);
                exit(json_encode($data));
    }
}else{

        $stmtdelet = $dbh->prepare("DELETE FROM $taudio WHERE item_id =  :filmID");
        $stmtdelet->bindParam(':filmID', $id, PDO::PARAM_INT);
        $stmtdelet->execute();

            if (is_file('./update-unpaid-order/uploads/' .$visitor.'/empty')) {
                unlink('./update-unpaid-order/uploads/' .$visitor.'/empty');
            }


            if (is_file('./update-unpaid-order/uploads/' . $visitor.'/'.$name)) {
                unlink('./update-unpaid-order/uploads/' . $visitor.'/'.$name);
            }

            $carpeta = ('./update-unpaid-order/uploads/' .$visitor);

            $is_empty = (bool) (count(scandir($carpeta)) == 2);

            if ($is_empty) {

                rmdir($carpeta);

            }
            $data = array('original_filename' => $name, 'msj' => 'error');
            exit(json_encode($data));
}

