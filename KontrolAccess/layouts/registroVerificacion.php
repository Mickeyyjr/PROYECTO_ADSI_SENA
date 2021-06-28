<?php
include '../includes/header.php';
?>
<link rel="stylesheet" href="../css/formulario.css">


<div class="formulario contenedor-form">
    <form method="POST" action="../includes/verificacion.php" class="formulario-login" autocomplete="off">


        <div class="encabezado">
            <div class="title">
                <p class="titulo">Te estamos esperando. Registrate.</p>
            </div>

            <div class="linea">

            </div>


        </div>
        <div class="inputs">

            <input name="email" type="email" placeholder="Email" class="campo campo-password">

            <input name="password" type="password" placeholder="Password" class="campo campo-password" autocomplete="new-password">
            <button type="submit" name="enviar" class="btn campo">Continuar</button>
        </div>

        <div class="contenedor-mensaje">

        </div>


        <div class="inicia-sesion">
            <p class="parrafo">¿Ya tienes una cuenta? <a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/iniciar-sesion.php">Inicia sesión</a></p>
            <a href="../layouts/index.html" class="olvisate">Volver al inicio</a>
        </div>
    </form>
</div>

<?php
include '../includes/footer.php';
?>

<script src="../js/validarLogin.js"></script>



</body>

</html>