<?php
    require_once "../../autentication.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <style>
            body {
                font-family: "Playfair Display", serif;
                font-optical-sizing: auto;
                font-weight: bolder;
                font-style: italic;
            }
            .custom-title {
            font-size: 20px;
            color: #333;
            }
            .btn-primary {
            font-size: 16px;
            font-weight: bold;
            }
        </style>
    </head>
  <body>
    <div class="container-fluid bg-primary p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
        <a class="navbar-brand" href="/proyecto/view/head/head.php">Inicio</a>
            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNavDropdown" 
                    aria-controls="navbarNavDropdown" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    </div>
<div class="container-fluid">



<!-- <a href="/proyecto/view/username/index.php" class="btn btn-primary float-end">Agregar nuevo usuario</a> -->

<?php
    require_once "../username/index.php";
?>
