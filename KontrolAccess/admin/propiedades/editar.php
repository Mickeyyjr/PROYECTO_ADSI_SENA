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
    <h1>Actualizar / Eliminar usuario</h1>
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
            <th>Acciones</th>
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
            <td>
                <a href="actualizar.php" class="actualizar">Actualizar</a>
                <a href="" class="eliminar">Eliminar</a>
            </td>
        </tr>
        <?php endwhile;?>
        
        
    </tbody>

</table>
</main>




<?php
require '../../includes/footer.php';
?>