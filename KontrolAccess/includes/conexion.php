<?php

//Funcion que realiza la conexión a la base de datos
function conectarDB() :mysqli {
    $db = mysqli_connect("localhost", "root", "", "kontrolaccessdb");

    if(!$db){
        echo 'Ha ocurrido un error, no es posible conectarse a la base de datos';

        exit;
    }

    return $db;
}



