<?php
include_once "./src/conec.php";
clearstatcache();
$files = glob('./descargazip/*');
foreach ($files as $file) {
    unlink($file);
}
$ruta    = "update-unpaid-order/uploads";
$carpeta = $_POST['origen'];
$zip     = new ZipArchive();
$zip->open('./descargazip/pedido_' . $carpeta . '.zip', ZipArchive::CREATE);
$zip->setPassword($_POST['pass']);
$options = array('add_path' => 'pedido/', 'remove_all_path' => true);
$zip->addGlob($ruta . '/' . $carpeta . '/*', 0, $options);
$stmt = $dbh->prepare("SELECT * FROM $taudio where order_id = ?");
$stmt->execute([$carpeta]);
echo 'Carpeta: ' . $carpeta . '/';
while ($objeto = $stmt->fetch()) {
    $rutacorte = "./update-unpaid-order/uploads/" . $carpeta . "/cort-" . $objeto['original_filename'];
    if (file_exists($rutacorte)) {
        $zip->setEncryptionName('pedido/cort-'.$objeto['original_filename'], ZipArchive::EM_AES_256);
    }
    $zip->setEncryptionName('pedido/'.$objeto['original_filename'], ZipArchive::EM_AES_256);
    if (is_file("./update-unpaid-order/uploads/" . $carpeta . "/enlaces.txt")) {
        $zip->setEncryptionName('pedido/enlaces.txt', ZipArchive::EM_AES_256);
    }
}


if ($zip->close()) {
    echo '<div><button><a href="descargazip/pedido_' . $carpeta . '.zip" download>Descargar zip password: '.$_POST['pass'].'</a></button></div>';
} else {
    $stmt = $dbh->prepare("SELECT * FROM $taudio where order_id = ?");
    $stmt->execute([$carpeta]);
    echo 'Carpeta: ' . $carpeta . '/';
    while ($objeto = $stmt->fetch()) {
        $rutacorte = "./update-unpaid-order/uploads/" . $carpeta . "/cort-" . $objeto['original_filename'];
        if (file_exists($rutacorte)) {
            echo '<div><button><a href="' . $ruta . '/' . $carpeta . '/cort-' . $objeto['original_filename'] . '" download>Descargar cort-' . $objeto['original_filename'] . '</a></button></div>';
        }
        echo '<div><button><a href="' . $ruta . '/' . $carpeta . '/' . $objeto['original_filename'] . '" download>Descargar ' . $objeto['original_filename'] . '</a></button></div>';
        if (is_file("./update-unpaid-order/uploads/" . $carpeta . "/enlaces.txt")) {
            echo '<div><button><a href="' . $ruta . '/' . $carpeta . '/enlaces.txt" download>Descargar Enlaces.txt</a></button></div>';
        }
    }
}