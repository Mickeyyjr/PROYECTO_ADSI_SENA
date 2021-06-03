<?php


$tipo_id = $_POST['tipo_id'];
$id = $_POST['id'];
session_start();
$_SESSION['tipo_id'] = $tipo_id;

include("conexion.php");

$consulta = "SELECT*FROM persona WHERE tipo_id='$tipo_id' AND id_persona = '$id'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
?>
    <?php
    include("../layouts/verificarUsuario.php");
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
