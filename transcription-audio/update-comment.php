<?php
include_once __DIR__ . "/src/conec.php";
$item_id = $_POST['item_id'];
$comment = $_POST['comment'];

$audiodb = $dbh->prepare("UPDATE $taudio SET comment=:comm where item_id=:id");
	$audiodb->execute(array(':id' => $item_id, ':comm' => $comment));


    $salto   = chr(13) . chr(10);
    $enlaces = '';

    $da = $dbh->prepare("SELECT * FROM $taudio where order_id = :id AND link = 1");
	if ($da->execute(array(':id' => $visitor))) {
    	$resultado = $da->fetchAll(PDO::FETCH_ASSOC);
        $enlaces .= 'Estos son los enlaces subidos por el cliente y sus tiempo de Duracion: ' . $salto;
        foreach ($resultado as $audio) {
            $enlaces .= $salto . '[[ Enlace: ' . $audio['download'] . ' ] [ Duration: ' . $audio['duration_for_humans'] . ' ]' . $salto;
            if ($audio['comment'] != '') {
                $enlaces .= ' [ Commentario : ' . $audio['comment'] . ' ]]' . $salto;
            } else {
                $enlaces .= ' [ Commentario : Sin comentario.  ]]' . $salto;
            }
            $enlaces .= ' [ ------------------------------------------ ]' . $salto;
        }
        $file = fopen("./update-unpaid-order/uploads/" . $visitor . "/enlaces.txt", "w");
        fwrite($file, $enlaces . PHP_EOL);
        fclose($file);
    }
 ?>