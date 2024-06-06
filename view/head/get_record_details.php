<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../model/usernameModel.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $model = new usernameModel();
    $record = $model->show($id);

    if ($record) {
        header('Content-Type: application/json');
        echo json_encode($record);
    } else {
        echo json_encode(['error' => 'Registro no encontrado.']);
    }
} else {
    echo json_encode(['error' => 'ID no válido.']);
}
?>
