<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/globales.css">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro</title>
</head>

<body>
    <div class="formulario contenedor-form">
        <form method="POST" class="formulario-registro">
            <fieldset>
                <div class="img-logo">
                    <legend> <img src="../img/1.png" class="img-1" alt="logo-kontrolaccess"></legend>
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


                <div class="inicia-sesion">
                    <input type="submit" name="enviar" value="Crear cuenta" class="btn ">
                    <p class="parrafo">¿Ya tienes una cuenta? <a href="iniciar-sesion.html">Inicia sesión</a></p>
                </div>
                <div class="contenedor-mensaje">
                    <?php
                    include '../includes/registrarUsuarios.php';
                    ?>
                </div>
            </fieldset>
        </form>

    </div>

    <script src="../js/validarCampos.js"></script>
</body>

</html>