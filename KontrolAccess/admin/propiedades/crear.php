<?php
require '../../includes/header_propiedades.php';
?>

<link rel="stylesheet" href="../../css/registrarse.css">
<body>

<a href="../index.php" class="btn">Volver</a>
    <div class="formulario contenedor-form">
        <form method="POST" class="formulario-registro">

            <div class="encabezado">
                <div class="title">
                    <p class="titulo">Nuevo usuario</p>
                </div>

                <div class="linea">

                </div>

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
                    <input type="number" name="id_usuario" placeholder="Ingrese numero de documento" class="campo" id="idPersona">

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
                        <option value="1">Estudiante</option>
                        <option value="2">Docente</option>
                        <option value="3">Directivo</option>
                        <option value="4">Acudiente</option>
                        <option value="5">Empleado</option>
                    </select>
                </div>

            </div>

            <div class="contenedor-mensaje">
                <?php
                include '../../includes/registrarUsuarios.php';
                ?>
            </div>

            <div class="inicia-sesion">
                <input type="submit" name="enviar" value="Registrar usuario" class="btn ">
            </div>


        </form>

    </div>




    

    <script src="../../js/validarCampos.js"></script>

    <script>
        llamarValidadorInput();
        llamarValidadorSelect();
    </script>

</body>

</html>




<?php
require '../../includes/footer.php';
?>

