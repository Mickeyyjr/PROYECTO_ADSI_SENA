<?php


$email = $_POST['email'];
$id = $_POST['id'];
session_start();
$_SESSION['email'] = $email;

include("conexion.php");

$consulta = "SELECT*FROM usuario WHERE email='$email' AND id_usuario = '$id'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:../layouts/home.php");
} else {
?>
    <?php
    include("../layouts/iniciar-sesion.php");
    ?>
    <script>
        mensajeLogin();
    </script>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
