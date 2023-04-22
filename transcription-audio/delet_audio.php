<?php 
include_once __DIR__ . "/src/conec.php";

$item_id  = $_POST['item_id'];

function rmDir_rf($carpeta)
    {
      foreach(glob($carpeta . "/*") as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
          rmDir_rf($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($carpeta);
     }

$dato = $dbh->prepare("SELECT * FROM $taudio where item_id=:id");
if ($dato->execute(array(':id' => $item_id))) {
    $resultado = $dato->fetchAll(PDO::FETCH_ASSOC);

	foreach ($resultado as $audio) {
		rmDir_rf("./update-unpaid-order/uploads/" . $audio['order_id'] . "/123456/");
		$carpeta = ("./update-unpaid-order/uploads/" . $audio['order_id']);
		$is_empty = (bool) (count(scandir("./update-unpaid-order/uploads/" . $audio['order_id'])) == 2);
		if ($is_empty) {
		    rmdir($carpeta);
		}

	}

}

$delet = $dbh->prepare("DELETE FROM $taudio where item_id=:id");

$delet->execute(array(':id' => $item_id));



 ?>