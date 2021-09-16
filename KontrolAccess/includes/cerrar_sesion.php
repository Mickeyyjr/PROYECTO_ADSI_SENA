<?php

    //se inicia la sesión
    session_start();

    //para cerrar la sesión simplemente se formatea la superglobal $_SESSION, asi se habra cerrado sesión
    $_SESSION = [];

    //Al cerrar la sesión, se redirige al usuario al index de la pagina
    header('Location: ../layouts/index.php');


?>