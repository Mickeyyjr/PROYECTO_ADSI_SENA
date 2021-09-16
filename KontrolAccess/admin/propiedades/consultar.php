<?php

require '../../includes/funciones.php';

$auth = estaAutenticado();

//Si la $_SESSION['login] retorna un false o se encuentra vacia se ejecuta el siguiente código
if(!$auth){
     header ('Location: ../layouts/index.php'); //Si la sesion no ha sido iniciada se redirecciona a la página de inicio
}


//Conectar a la base de datos
require '../../includes/conexion.php'; //Se importa el archivo donde se encuentra la conexión
$db = conectarDB(); //Se llama la función que hace la conexión a la db

//Se hace la consulta a la base de datos
$query = "SELECT * FROM usuario"; 


$resultadoConsulta = mysqli_query($db, $query);


?>



<?php
require '../../includes/header_propiedades.php';
?>

<link rel="stylesheet" href="../../css/admin.css">


<main class="contenedorxd">
    <h1>Consultar usuario</h1>
    <a href="../index.php" class="btn">Volver</a>


    <table class="registros">
    <thead>
        <tr>
        <th>Id</th>
            <th>Tipo documento</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Jornada</th>
        </tr>
    </thead>

    <tbody>
        <?php while($usuario = mysqli_fetch_assoc($resultadoConsulta)) :  ?>
        <tr>
        <td><?php echo $usuario['id_usuario'];   ?></td>
            <td><?php echo $usuario['tipo_doc'];   ?></td>
            <td><?php echo $usuario['documento'];   ?></td>
            <td><?php echo $usuario['nombres'];   ?></td>
            <td><?php echo $usuario['apellidos'];   ?></td>
            <td><?php echo $usuario['email'];   ?></td>
            <td><?php echo $usuario['id_rol'];   ?></td>
            <td><?php echo $usuario['id_jornada'];   ?></td>
        </tr>
        <?php endwhile;?>
        
        
    </tbody>

</table>
</main>


<?php
require '../../includes/footer.php';
?>