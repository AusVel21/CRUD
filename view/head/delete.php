<?php
require_once __DIR__ . '../../controller/usernameController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $obj = new usernameController();
    $obj->delete($id);
} else {
    echo "el método de solicitud no es válido.";
}
?>
