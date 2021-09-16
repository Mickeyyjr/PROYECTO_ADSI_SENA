
<!--Codigo PHP-->
<?php 
    require '../../includes/funciones.php';

    $auth = estaAutenticado();
    
    //Si la $_SESSION['login] retorna un false o se encuentra vacia se ejecuta el siguiente código
    if(!$auth){
        header ('Location: ../layouts/index.php'); //Si la sesion no ha sido iniciada se redirecciona a la página de inicio
    }




    //Enlazar al header y estilos a la pagina
    include '../../includes/header_propiedades.php';

    //Conectar a la base de datos
    require '../../includes/conexion.php'; //Se importa el archivo donde se encuentra la conexión
    $db = conectarDB(); //Se llama la función que hace la conexión a la db
    $result = '';


    //Consultar para obtener los tipos de documentos
    $consulta = "SELECT * FROM tipo_documento";
    $resultado = mysqli_query($db, $consulta);

    //Consultar para obtener los roles
    $consulta2 = "SELECT * FROM rol";
    $resultado2 = mysqli_query($db, $consulta2);

    //Consultar para obtener las jornadas
    $consulta3 = "SELECT * FROM jornada";
    $resultado3 = mysqli_query($db, $consulta3);



    //Se asignan las variables para guardar los valores previos
    $tipo_doc = '';
    $documento = '';
    $nombres = '';
    $apellidos = '';
    $email = '';
    $rol = '';
    $jornada = '';



    //Arreglo con mensajes de errores
    $errores = [];

    //Validador de que el REQUEST METHOD sea POST
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        //asignando variable a cada valor
        $tipo_doc = ($_POST['tipo_doc']);
        $documento = ($_POST['documento']);
        $nombres = ($_POST['nombres']);
        $apellidos = ($_POST['apellidos']);
        $email = ($_POST['email']);
        $rol = ($_POST['rol']);
        $jornada = ($_POST['jornada']);


        //Validador de campos, si estan vacios no se ejecuta la insercion de datos en la db
            if(!$tipo_doc){
                $errores[] = 'Debes seleccionar un tipo de documento';
            }
    
            if(strlen($documento) < 8){
                $errores[] = 'Debes digitar un numero de documento válido';
            }
    
            if(strlen($nombres) < 4){
                $errores[] = 'Debes escribir un nombre';
            }
    
            if(strlen($apellidos) < 4){
                $errores[] = 'Debes escribir un apellido';
            }
    
            if(!$email){
                $errores[] = 'Debes escribir un email válido';
            }
    
            if(!$rol){
                $errores[] = 'Debes seleccionar un rol';
            }
    
            if(!$jornada){
                $errores[] = 'Debes seleccionar una jornada';
            }

            //Insertar los valores en la base de datos

            //Revisar si el arreglo de errores esta vacio para insertar los datos en la base de datos
            if(empty($errores)){
                $query = "INSERT INTO usuario(tipo_doc, documento, nombres, apellidos, email, id_rol, id_jornada) VALUES('$tipo_doc', '$documento', '$nombres', '$apellidos', '$email', '$rol', '$jornada');";
                $result = mysqli_query($db, $query);

                //Redireccionar cuando se haya registrado correctamente un usuario, mandando una respuesta a traves de la url
                if($result){
                    header('Location: ../index.php?request=1'); //se manda una respuesta a traves de la url donde se va a leer en el index.php
                }
            }
    }


    
        






?>

<body>
<!-- link para enlazar los estilos del formulario -->
<link rel="stylesheet" href="../../css/registrarse.css">


<!--Boton volver al index-->
<a href="../index.php" class="btn">Volver</a>


<!--Formulario para registrar a los nuevos usuarios-->
    <div class="formulario contenedor-form">
        <form  class="formulario-registro" method="POST" action="../../admin/propiedades/crear.php" >

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
                    <select name="tipo_doc" class="campo tipoId" required>
                        <option value="">Seleccione</option>

                        <!--Conexión a la tabla (tipo_documento) para obtener los tipos de documentos que se muestran en el formulario directamente desde la db-->
                        <?php while($tipo_documento = mysqli_fetch_assoc($resultado)) : ?>

                            <!--El codigo PHP guarda los datos ingresados y muestra la informacion extraida de la db--> 
                            <option <?php echo $tipo_doc === $tipo_documento['nombre_corto'] ? 'selected' : ''; ?>  value="<?php echo $tipo_documento['nombre_corto'];?>"> <?php echo $tipo_documento['nombre_corto']; ?></option>

                        <?php endwhile; ?>    
                    </select>

                </div>

                <div class="seccion seccion-idpersona">
                    <label>Número de documento</label>
                    <input type="number" name="documento" placeholder="Ingrese numero de documento" class="campo" id="idPersona" value="<?php echo $documento;?>"required> <!--El codigo PHP guarda los valores previos digitados por el usuario en las variables asignadas-->

                </div>

                <div class="seccion seccion-nombre">
                    <label>Nombres</label>
                    <input type="text" name="nombres" placeholder="Nombre" class="campo" id="nombre" value="<?php echo $nombres;?>" required>
                </div>

                <div class="seccion seccion-apellido">
                    <label>Apellidos</label>
                    <input type="text" name="apellidos" placeholder="Apellido" class="campo" id="apellido" value="<?php echo $apellidos;?>" required>
                </div>

                <div class="seccion seccion-email">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" class="campo" id="email" value="<?php echo $email;?>" required>
                </div>


                <div class="seccion seccion-rol">
                    <label>Rol</label>
                    <select name="rol" class="campo rol" required>
                        <option value="">Seleccione</option>

                        <!--Conexión a la tabla (rol) para obtener los roles que se muestran en el formulario directamente desde la db-->
                        <?php while($id_rol = mysqli_fetch_assoc($resultado2)) : ?>

                        <!--El codigo PHP guarda los datos ingresados y muestra la informacion extraida de la db-->    
                        <option <?php echo $rol=== $id_rol['id_rol'] ? 'selected' : ''; ?>  value="<?php echo $id_rol['id_rol'];?>"> <?php echo $id_rol['nombre']; ?></option>

                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="seccion seccion-rol">
                    <label>Jornada</label>
                    <select name="jornada" class="campo rol" required>
                        <option value="">Seleccione</option>

                        <!--Conexión a la tabla (jornada) para obtener las jornadas que se muestran en el formulario directamente desde la db-->
                        <?php while($id_jornada= mysqli_fetch_assoc($resultado3)) : ?>

                        <!--El codigo PHP guarda los datos ingresados y muestra la informacion extraida de la db-->
                        <option <?php echo $rol=== $id_jornada['id_jornada'] ? 'selected' : ''; ?>  value="<?php echo $id_jornada['id_jornada'];?>"> <?php echo $id_jornada['nombre']; ?></option>

                        <?php endwhile; ?>
                    </select>
                </div>

            </div>


            <!--Validador de que se hayan insertado los datos a la db-->
            <div class="contenedor-mensaje">
               <?php foreach($errores as $error) : ?>

                <p class="error"><?php echo $error;?></p>
                

               <?php endforeach; ?>
            </div>

            <div class="inicia-sesion">
                <input type="submit" name="enviar" value="Registrar usuario" class="btn ">
            </div>


        </form>

    </div>


</body>

</html>




<!--Se importa el footer de la pagina-->
<?php
require '../../includes/footer.php';
?>

