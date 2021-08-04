<?php


// Función que registra a los usuarios
function registrarUsuarios()
{
    include 'conexion.php';

    if (isset($_POST['enviar'])) {
        if (strlen($_POST['tipo_id']) >= 1 && strlen($_POST['id_usuario']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['rol']) >= 1) {
            $tipo_id = ($_POST['tipo_id']);
            $id_usuario = ($_POST['id_usuario']);
            $nombre = ($_POST['nombre']);
            $apellido = ($_POST['apellido']);
            $email = ($_POST['email']);
            $rol = ($_POST['rol']);

            $insertar = "INSERT INTO usuario(tipo_id, id_usuario, nombre, apellido, email, id_rol, id_jornada)
        VALUES('$tipo_id', '$id_usuario', '$nombre', '$apellido', '$email', '$rol', NULL);";

            $resultado = mysqli_query($conexion, $insertar);



            if ($resultado) {
?>
                <script>
                    mensajeCorrecto();
                </script>
            <?php

            } else {
            ?>
                <script>
                    mensajeError();
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                mensajeCompletar();
            </script>
            <?php
        }
    }
}


function registrarPassword()
{
    include 'conexion.php';
    if (isset($_POST['enviar'])) {
        if (strlen($_POST['password']) >= 1 && strlen($_POST['password2']) >= 1) {
            $password = ($_POST['password']);
            $password2 = ($_POST['password']);

            $insertarPassword = "UPDATE persona SET passwordd='$password' WHERE nombre= 'Aida Janeth'";

            $resultado = mysqli_query($conexion, $insertarPassword);

            if ($resultado) {
            ?>
                <h1>FUNCIONOOOOO</h1>
            <?php
            } else {
            ?>
                <h1>NO FUNCIONOOOOO</h1>
            <?php
            }
        } else {
            ?>
            <script>
                mensajeCompletar();
            </script>
<?php
        }
    }
}
