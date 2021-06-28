<?php
include '../includes/header.php';
?>
<link rel="stylesheet" href="../css//formulario.css">

<div class="formulario contenedor-form">
    <form method="POST" action="../includes/login.php" class="formulario-login" autocomplete="off">


        <div class="encabezado">
            <div class="title">
                <p class="titulo">Que bueno es volver a verte. Inicia sesión.</p>
            </div>

            <div class="linea">

            </div>

        </div>
        <div class="inputs">

            <input name="email" type="email" placeholder="Email" class="campo campo-email">

            <input name="id" type="number" placeholder="Documento de identidad" class="campo campo-password">
            <button type="submit" class="btn campo">Iniciar sesión</button>
        </div>

        <div class="contenedor-mensaje">

        </div>


        <div class="inicia-sesion">
            <a href="#" class="olvisate">¿Olvidaste tu contraseña?</a>
            <p class="parrafo">¿Aún no tienes una cuenta?<a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/registroVerificacion.php"> Registrate</a></p>
        </div>
    </form>
</div>

<?php
include '../includes/footer.php';
?>

<script src="../js/validarLogin.js"></script>


</body>

</html>