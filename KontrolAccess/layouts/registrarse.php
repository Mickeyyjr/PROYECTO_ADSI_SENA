<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrarse.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/globales.css">
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/mensajes.css">
    <script src="../js/mensajes.js"></script>
    <title>Registro</title>
</head>

<section class="parte-arriba">
    <a href="index.html"><img src="../img/logoSena6.png" alt="logo-kontrolaccess"></a>
    <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank"><img src="../img/logoSenaNegro.png" alt=""></a>
</section>


<header>
    <div class="contenedor contenido-header">


        <div class="nav-principal">
            <nav>
                <a href="../layouts/index.html" class="inicio">Inicio</a>
                <a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/iniciar-sesion.php" class="iniciarSesion">Iniciar sesión</a>
                <a href="http://localhost/PROYECTO_ADSI_SENA/KontrolAccess/layouts/verificarUsuario.php" class="registrarse">Registrarse</a>
                <a href="#" class="asistencia">Asistencia</a>
            </nav>
        </div>
    </div>
</header>

<body>
    <div class="formulario contenedor-form">
        <form method="POST" class="formulario-registro">


            <div class="title">
                <p class="titulo">Registro de usuarios nuevos</p>
            </div>

            <div class="linea">

            </div>
            <div class="inputs">


                <div class="seccion seccion-tipoid">
                    <label>Tipo de documento de identidad</label>
                    <select name="tipo_id" class="campo tipoId">
                        <option value="seleccione">Seleccione</option>
                        <option value="CC">Cédula de Ciudadania</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="RC">Registro Civil</option>
                    </select>

                </div>

                <div class="seccion seccion-idpersona">
                    <label>Número de documento</label>
                    <input type="number" name="id_persona" placeholder="Ingrese numero de documento" class="campo" id="idPersona">

                </div>

                <div class="seccion seccion-nombre">
                    <label>Nombres</label>
                    <input type="text" name="nombre" placeholder="Nombre" class="campo" id="nombre">
                </div>

                <div class="seccion seccion-apellido">
                    <label>Apellidos</label>
                    <input type="text" name="apellido" placeholder="Apellido" class="campo" id="apellido">
                </div>

                <div class="seccion seccion-email">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" class="campo" id="email">
                </div>


                <div class="seccion seccion-rol">
                    <label>Rol</label>
                    <select name="rol" class="campo rol">
                        <option value="seleccione">Seleccione</option>
                        <option value="estudiante">Estudiante</option>
                        <option value="docente">Docente</option>
                        <option value="directivo">Directivo</option>
                        <option value="acudiente">Acudiente</option>
                        <option value="empleado">Empleado</option>
                    </select>
                </div>

            </div>

            <div class="contenedor-mensaje">
                <?php
                include '../includes/registrarUsuarios.php';
                ?>
            </div>

            <div class="inicia-sesion">
                <input type="submit" name="enviar" value="Siguiente" class="btn ">
                <p class="parrafo">¿Ya tienes una cuenta? <a href="iniciar-sesion.html">Inicia sesión</a></p>
            </div>


        </form>

    </div>




    <footer>
        <p>Servicio Nacional de Aprendizaje (SENA) | Todos los derecos reservados © </p>
    </footer>

    <script src="../js/validarCampos.js"></script>

    <script>
        llamarValidadorInput();
        llamarValidadorSelect();
    </script>

</body>

</html>