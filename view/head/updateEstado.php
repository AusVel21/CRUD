<?php
// update_estado.php

require_once __DIR__ . '/../../controller/usernameController.php'; // Asegúrate de incluir el archivo que contiene tu modelo

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $id = $_GET['id'];
    $estado = $_GET['estado'];
    $model = new usernameController();
    $resultado = $model->updateEstado($id, $estado);
    if($resultado){
        header("Location: head.php");
        exit();
    } else {
        echo "Hubo problema al cambio de estado";
    }
} else {
    echo "Ocurrio un error";
}
?>
