<?php


function verificarUsuario()
{
    if (isset($_POST['enviar'])) {
        if (strlen($_POST['email']) >= 1 && strlen($_POST['password'])) {
            $email = $_POST['email'];
            session_start();
            $_SESSION['email'] = $email;

            include("conexion.php");

            $consulta = "SELECT*FROM usuario WHERE email = '$email'";
            $resultado = mysqli_query($conexion, $consulta);

            $filas = mysqli_num_rows($resultado);

            if ($filas) {
?>
                <?php
                include("../layouts/registroVerificacion.php");
                ?>
                <script>
                    mensajeUsuario();
                </script>
            <?php

            } else {
            ?>
                <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../layouts/registrarse.php">
            <?php
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        } else {
            ?>
            <?php
            include("../layouts/registroVerificacion.php");
            ?>
            <script>
                mensajeCompletar();
            </script>
<?php
        }
    }
}
?>

<?php
