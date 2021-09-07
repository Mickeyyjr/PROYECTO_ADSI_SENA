<?php


// Función que registra a los usuarios
function registrarUsuarios()
{
    include 'conexion.php';

    if (isset($_POST['enviar'])) {
        if (strlen($_POST['tipo_doc']) >= 1 && strlen($_POST['documento']) >= 1 && strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['rol']) >= 1) {
            $tipo_doc = ($_POST['tipo_doc']);
            $documento = ($_POST['documento']);
            $nombres = ($_POST['nombres']);
            $apellidos = ($_POST['apellidos']);
            $email = ($_POST['email']);
            $rol = ($_POST['rol']);

            $insertar = "INSERT INTO usuario(tipo_doc, documento, nombres, apellidos, email, id_rol, id_jornada)
        VALUES('$tipo_doc', '$documento', '$nombres', '$apellidos', '$email', '$rol', NULL);";

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
