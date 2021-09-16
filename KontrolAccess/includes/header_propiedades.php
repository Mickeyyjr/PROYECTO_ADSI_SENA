<?php

//Se verifica que la superglobal $_SESSION exista, si no existe se inicia la sesion con session_start para poder acceder a ella
if(!isset($_SESSION)){
    session_start();
}

//Se crea una variable a traves de la super global, si tiene un atributo login retorna true que quiere decir que el usuario tiene una sesion activa, si no existe automaticamente se le asigna false que quiere decir que no hay ninguna sesion activa
$auth = $_SESSION['login'] ?? false;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/globales.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/mensajes.css">
    <link rel="stylesheet" href="../../css/propiedades.css">
    <script src="../../js/mensajes.js"></script>
    <link rel="shortcut icon" href="../../img/logo-ka.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <title>Inicio</title>
</head>

<body>
    <header>
        <div class="contenedor-header">
            <div class="logo">
                <a href="../../layouts/index.php"><img src="../../img/kontrol-access-blanco.png" alt="logo" class="logoo"></a>
            </div>


            <div class="navegacion">
                <a href="../layouts/index.php">Inicio</a>
                <a href="../layouts/iniciar-sesion.php">Iniciar sesion</a>
                <a href="#">Asistencia</a>

                <!--Se revisa si la variable $auth, si retornó true se ejecuta el siguiente código-->
                <?php if($auth) :?>

                    <!--Se genera un enlace de cerrar sesión si la variable $auth retorno true, esto quiere decir que el usuario tiene una sesion activa-->
                    <a href="../../includes/cerrar_sesion.php" class="ultimo">Cerrar sesion</a>

                <?php endif; ?>
            </div>
        </div>
    </header>