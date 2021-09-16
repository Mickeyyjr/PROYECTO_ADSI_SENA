<?php
include '../includes/header.php';

//Conectar a la base de datos

require '../includes/conexion.php';
$db = conectarDB();


//Se crean las variables para asignar los valores previos colocados por los usuarios en los inputs
$email = ''; //En cada variable se guardan los datos que fueron ingresados por el usuario para que no tenga que reescribirlos
$password = '';

//El arreglo de errores va a tener todos los errores que se generan al validar el formulario, en caso de estar vacio continua el flujo del codigo normalmente
$errores = [];

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];


    //validar campos
    if(!$email){
        $errores[] = 'Por favor ingresa un email válido';
    }

    if(!$password){
        $errores[] = 'Por favor ingresa una contraseña';
    }

    //Si el arreglo de errores se encuentra vacio, es decir no tiene ningún error, se ejecuta el siguiente codigo
    if(empty($errores)){
        //Se hace la validacion para ver si el usuario existe o no en la db
        $query = "SELECT * FROM administrador WHERE email = '$email';";
        $resultado = mysqli_query($db, $query);

        //Con esta sintaxis dentro del if se verifica si la consulta trajo algun registro, como es un objeto se hace la sintaxis de flecha "->"
        if($resultado -> num_rows){
            /*Como el resultado encontro un registro quiere decir que se encuentra en la base de datos, 
            ahora vamos a verificar si el password es correcto*/

            $administrador = mysqli_fetch_assoc($resultado); //Se le asigna el registro encontrado a la variable administrador a traves de un arreglo (mysqli_fetch_assoc)
        
            //Verificar si el password coincide o no con el de la base de datos

            $auth = password_verify($password, $administrador['password']); //password_verify compara el password de la base de datos con el password ingresado a través del formulario y retorna un boolean

            //Verifica si la comprobacion es true o false
            if($auth){
                //El password es correcto, se inicia la sesion
                session_start();

                $_SESSION['usuario'] = $administrador['id_administrador'];
                $_SESSION['login'] = true;

                header('Location: ../admin/index.php');
            }else{
                $errores[] = 'El password es incorrecto' ;
            }

        }else{
            $errores[] = 'El usuario no existe pa';
        }
    }
}




?>
<link rel="stylesheet" href="../css//formulario.css">

<div class="formulario contenedor-form">
    <form method="POST"  class="formulario-login" autocomplete="off" >


        <div class="encabezado">
            <div class="title">
                <p class="titulo">Que bueno es volver a verte. Inicia sesión.</p>
            </div>

            <div class="linea"></div>

        </div>
        <div class="inputs">

            <input name="email" type="email" placeholder="Email" class="campo campo-email" value="<?php echo $email; ?>"  required> <!--El codigo PHP guarda los valores previos ingresados-->

            <input name="password" type="password" placeholder="Password" class="campo campo-password" value="<?php echo $password; ?>"  required> <!--El codigo PHP guarda los valores previos ingresados-->
            <button type="submit" class="btn campo">Iniciar sesión</button>
        </div>

        <div class="contenedor-mensaje">
        <?php foreach($errores as $error) :?>

            <p class="error"><?php echo $error; ?></p>

        <?php endforeach;?>
        </div>

    </form>
</div>

<?php
include '../includes/footer.php';
?>




</body>

</html>