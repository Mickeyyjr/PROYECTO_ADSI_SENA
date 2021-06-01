<?php


// Función que registra a los usuarios
function registrarUsuarios()
{
    include 'conexion.php';

    if (isset($_POST['enviar'])) {
        if (strlen($_POST['tipo_id']) >= 1 && strlen($_POST['id_persona']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['rol']) >= 1) {
            $tipo_id = ($_POST['tipo_id']);
            $id_persona = ($_POST['id_persona']);
            $nombre = ($_POST['nombre']);
            $apellido = ($_POST['apellido']);
            $email = ($_POST['email']);
            $rol = ($_POST['rol']);

            $insertar = "INSERT INTO persona(tipo_id, id_persona, nombre, apellido, email, rol)
        VALUES('$tipo_id', '$id_persona', '$nombre', '$apellido', '$email', '$rol');";

            $resultado = mysqli_query($conexion, $insertar);



            if ($resultado) {
?>
                <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../layouts/registrarse2.php">
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
?>