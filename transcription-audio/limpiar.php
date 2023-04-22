<?php 
include_once __DIR__ . "/src/conec.php";
if($_POST['limpiar']=='vaciar'){

$files = glob('update-unpaid-order/uploads/*');
foreach($files as $file){
	$filess = glob($file.'/*');
	foreach($filess as $fil){
    	if(is_file($fil)){
            unlink($fil);
          }else{
            rmdir($fil);
          }
    }
  if(is_dir($file)){
  	rmdir($file);
  }
}

$delet = $dbh->prepare("DELETE FROM $taudio");
$delet->execute();

$delett = $dbh->prepare("DELETE FROM $tordaudi");
$delett->execute();

echo 'Fueron eliminados todos los registros de la Base de Datos y archivos en carpetas';
}else{
echo 'No acontecio ningun efecto tiene que selecionar una accion';
}