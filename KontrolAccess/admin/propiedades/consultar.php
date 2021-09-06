<?php

//importar la conexion

require '../../includes/conexion.php';

//Escribir el query

$query = "SELECT * FROM usuario"; 

//Consultar la BD

$resultadoConsulta = mysqli_query($conexion, $query);

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
            <th>Tipo id</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Jornada</th>
        </tr>
    </thead>

    <tbody>
        <?php while($usuario = mysqli_fetch_assoc($resultadoConsulta)) :  ?>
        <tr>
            <td><?php echo $usuario['tipo_id'];   ?></td>
            <td><?php echo $usuario['id_usuario'];   ?></td>
            <td><?php echo $usuario['nombre'];   ?></td>
            <td><?php echo $usuario['apellido'];   ?></td>
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