<?php
if(file_exists("../../../../wp-config.php")){
  include_once "../../../../wp-config.php";
}else if(file_exists("../../../../../wp-config.php")){
  include_once "../../../../../wp-config.php";
}
$dbname = DB_NAME;
$user= DB_USER;
$password = DB_PASSWORD;
$taudio = $table_prefix.'transcriAudio';
$tordaudi = $table_prefix.'transcriOrder';
// Con un array de opciones
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}
// Con un el método PDO::setAttribute
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}

function getIp() {
  $ip = $_SERVER['REMOTE_ADDR'];

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  return $ip;
}

$visitor = getIp();

 ?>