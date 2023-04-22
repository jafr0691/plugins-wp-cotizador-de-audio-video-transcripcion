<?php
include_once __DIR__ . "/../src/conec.php";

$link    = $_POST['folder_links'];
$id      = rand();


function linkId($url)
{
	if ($url != '') {
		$match = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
		if ((int) $match > 0) {
			return $matches[0];
		}
	}
	return false;
}

function saca_dominio($url)
{
	$protocolos = array('http://', 'https://', 'ftp://', 'www.');
	$url        = explode('/', str_replace($protocolos, '', $url));
	return $url[0];
}
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
		} else if ($minutos == "" ) {
			$hora_texto .= "00:";
		} else {
			$hora_texto .= $minutos . ":";
		}

		if ($segundos < 0) {
			$hora_texto .= "00";
		} else if ($segundos > 0 and $segundos < 10) {
			$hora_texto .= "0" . $segundos . "";
		} else  if ($segundos == "" ) {
			$hora_texto .= "00";
		} else{
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

function hora_a_segundos($hora) {
	list($h, $m, $s) = explode(':', $hora);
	return ($h * 3600) + ($m * 60) + $s;
}

$array = explode(" ", $link);
$il = 0;

	if (saca_dominio($link) == 'youtube.com' or saca_dominio($link) == 'youtu.be') {

		$vid = linkId($link);
		$apikey      = "AIzaSyDxTF2cAiGzh0HLN8o07kWx0RZ0vuRJRJ4"; // Like this AIcvSyBsLA8znZn-i-aPLWFrsPOlWMkEyVaXAcv
        $dur         = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=$vid&key=$apikey");
        $data = json_decode($dur, true);
		foreach ($data['items'] as $rowdata) {
		     $vTime = $rowdata['contentDetails']['duration'];
		     $title = $rowdata['snippet']['title'];
		}


		$interval = new DateInterval($vTime);
		//echo $vTime;
		$seg = $interval->h * 3600 + $interval->i * 60 + $interval->s;;
        $duration = $seg;
        $duration_humans = conversorSegundosHoras($seg, 2);
        $duration_till   = conversorSegundosHoras($seg, 1);

        $stmt = $dbh->prepare("INSERT INTO $taudio (item_id, original_filename, original_duration, comment, download, duration_for_humans, till_human, link, duration, order_id, negado) VALUES (:id, :filename, :duration, :comment, :download, :dura_hum, :till_human, :link, :dura, :order_id, :negado)");

        if ($stmt->execute(array(':id' => $id, ':filename' => $title, ':duration' => $duration, ':comment' => '', ':download' => $link, ':dura_hum' => $duration_humans, ':till_human' => $duration_till, ':link' => 1, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 2))) {

        	$data = array('duration' => $duration, 'download' => $link, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $title, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 2, 'msj' => 'bien');
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

        	$enlaces .= $salto . '[[ Enlace: ' . $link . ' ] [ Duration: ' . $duration_humans . ' ]' . $salto;
        	$enlaces .= ' [ Commentario : Sin comentario.  ]]' . $salto;
        	$enlaces .= ' [ ------------------------------------------ ]' . $salto;
        	fwrite($file, $enlaces . PHP_EOL);
        	fclose($file);
        } else {
        	$data = array('msj' => 'error', 'download' => $link);
        }

    } else if (saca_dominio($link) == 'vimeo.com') {
    	//Url donde esta nuestro JSON
        $req = 'http://vimeo.com/api/oembed.json?url='.$link;

        //Iniciamos cURL junto con la URL
        $cVimeo = curl_init($req);

        //Agregamos opciones necesarias para leer
        curl_setopt($cVimeo,CURLOPT_RETURNTRANSFER, TRUE);

        // Capturamos la URL
        $gVimeo = curl_exec($cVimeo);

        //Descodificamos para leer
        $getVimeo = json_decode($gVimeo,true);

        //Asociamos los campos del JSON a variables
        $title = $getVimeo['title'];
        $seg = $getVimeo['duration'];

    	$duration        = round($seg);
    	$duration_humans = conversorSegundosHoras($seg, 2);
    	$duration_till   = conversorSegundosHoras($seg, 1);

    	$stmt = $dbh->prepare("INSERT INTO $taudio (item_id, original_filename, original_duration, comment, download, duration_for_humans, till_human, link, duration, order_id, negado) VALUES (:id, :filename, :duration, :comment, :download, :dura_hum, :till_human, :link, :dura, :order_id, :negado)");

    	if ($stmt->execute(array(':id' => $id, ':filename' => $title, ':duration' => $duration, ':comment' => '', ':download' => $link, ':dura_hum' => $duration_humans, ':till_human' => $duration_till, ':link' => 1, ':dura' => $duration, ':order_id' => $visitor, ':negado' => 2))) {
    		$data    = array('duration' => $duration, 'download' => $link, 'original_duration' => $duration, 'comment' => '', 'original_filename' => $title, 'duration_for_humans' => $duration_humans, 'from' => 0, 'from_human' => '00:00:00', 'till' => $duration, 'till_human' => $duration_till, 'id' => $id, 'negado' => 2, 'msj' => 'bien');
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

    		$enlaces .= $salto . '[[ Enlace: ' . $link . ' ] [ Duration: ' . $duration_humans . ' ]' . $salto;
    		$enlaces .= ' [ Commentario : Sin comentario.  ]]' . $salto;
    		$enlaces .= ' [ ------------------------------------------ ]' . $salto;
    		fwrite($file, $enlaces . PHP_EOL);
    		fclose($file);
    	} else {
    		$data = array('msj' => 'error', 'download' => $link);
    	}
    } else {
    	$data = array('msj' => 'error', 'download' => $link);
    }
exit(json_encode($data));