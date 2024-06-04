<?php
    if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['correo_electronico']) )  {        
        require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

        $obj = new usernameController();

        $result = $obj->update($_POST['id'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo_electronico'], $_POST['estado']);

        if($result !== false) {
            header("Location: head.php");
            exit();
        } else {
            echo "Error al actualizar el registro.";
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
?>
