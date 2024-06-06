
<?php
    session_start();
        require_once __DIR__ . '/../../model/usernameModel.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $correo_electronico = $_POST['correo_electronico'];
        $password = $_POST['password'];

        $consult = new usernameModel();
        $user = $consult->getUserByEmail($correo_electronico);
        $verifi = password_verify($password, $user['password']);
        $session = $_SESSION['user_id'] = $user['id'];
        echo "<script>console.log('Usuario no encontrado para el correo electrónico: validar', '" . $user['password'] . "');</script>";
        echo "<script>console.log('Este es el password', '" . $password . "');</script>";
        echo "<script>console.log('Buscando la informacion', '" . $verifi . "');</script>";
        echo "<script>console.log('Esta es la session', '" . $session . "');</script>";

        if ($user && $verifi) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: head.php");
            exit();
        } else {
            header("Location: login.html");
            $mensaje = "Correo electrónico o contraseña incorrectos.";
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
        }

    } else {
        echo "Método de solicitud no válido.";
    }
?>
