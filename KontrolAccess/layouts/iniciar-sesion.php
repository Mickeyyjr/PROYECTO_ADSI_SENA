<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/iniciar-sesion.css">
    <link rel="stylesheet" href="../css/globales.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mensajes.css">
    <script src="../js/mensajes.js"></script>

    <title>Iniciar sesion</title>
</head>

<body>

    <section class="parte-arriba">
        <a href="index.html"><img src="../img/logoSena6.png" alt="logo-kontrolaccess"></a>
        <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank"><img src="../img/logoSenaNegro.png" alt=""></a>
    </section>


    <header>
        <div class="contenedor contenido-header">


            <div class="nav-principal">
                <nav>
                    <a href="../layouts/index.html" class="inicio">Inicio</a>
                    <a href="iniciar-sesion.html" class="iniciarSesion">Iniciar sesión</a>
                    <a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/verificarUsuario.php" class="registrarse">Registrarse</a>
                    <a href="#" class="asistencia">Asistencia</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="formulario contenedor-form">
        <form method="POST" action="../includes/login.php" class="formulario-login" autocomplete="off">

            <div class="title">
                <p class="titulo">Inicia sesion</p>
            </div>

            <div class="linea">

            </div>
            <div class="inputs">

                <input name="email" type="email" placeholder="Email" class="campo campo-email">

                <input name="id" type="number" placeholder="Documento de identidad" class="campo campo-password">
                <button type="submit" class="btn campo">Log in</button>
            </div>

            <div class="contenedor-mensaje">

            </div>


            <div class="inicia-sesion">
                <a href="#" class="olvisate">¿Olvidaste tu contraseña?</a>
                <p class="parrafo">¿Aún no tienes una cuenta?<a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/registrarse.php"> Registrate</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>Servicio Nacional de Aprendizaje (SENA) | Todos los derecos reservados © </p>
    </footer>

    <script src="../js/validarLogin.js"></script>



</body>

</html>