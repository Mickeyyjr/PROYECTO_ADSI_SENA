<?php

include 'conexion.php';

if (isset($_POST['id_persona'], $_POST['tipo_id'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['rol'])) {
    $id_persona = $_POST['id_persona'];
    $tipo_id = $_POST['tipo_id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];

    $sql = "INSERT INTO persona(id_persona, tipo_identificacion, nombres, apellidos, email, rol)
                        VALUES('$id_persona', '$tipo_id', '$nombre', '$apellido', '$email', '$rol');";

    if ($db->query($sql) === true) {
        echo 'Datos insertados correctamente';
    } else {
        die('Error al insertar datos .$db->error');
    }
};

function mostrarRegistros()
{
    $datos = 'SELECT * FROM persona';

    echo $datos;
};

mostrarRegistros();
