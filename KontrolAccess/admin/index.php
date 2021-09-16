<?php

    require '../includes/funciones.php';

    $auth = estaAutenticado();
    
    //Si la $_SESSION['login] retorna un false o se encuentra vacia se ejecuta el siguiente código
    if(!$auth){
        header ('Location: ../layouts/index.php'); //Si la sesion no ha sido iniciada se redirecciona a la página de inicio
    }







    include '../includes/header.php';

    //Se lee la respuesta que ha sido pasado a traves de la url y se convierte en una variable
    $respuesta = $_GET['request'] ?? null;
?>

<main class="contenedorxd">
    <h1>Administrador</h1>


    <div class="botones">
        <a href="propiedades/crear.php" class="btn">Nuevo usuario</a>
        <a href="propiedades/editar.php" class="btn">Actualizar / Eliminar</a>
        <a href="propiedades/consultar.php" class="btn">Consultar </a> 
    </div>
    
</main>


<!--Se valida que el redireccionamiento que ha mandado crear.php sea 1, que significa que el usuario ha sido registrado correctamente en la db-->
<?php
if($respuesta === '1' ): ?>
    <div class="contenedor-mensaje">
        <script>
            mensajeCorrecto();
        </script>
    </div>
<?php endif;?>

<?php
if($respuesta === '2' ): ?>
    <div class="contenedor-mensaje">
        <script>
            mensajeActualizar();
        </script>
    </div>
<?php endif;?>

<?php
if($respuesta === '3' ): ?>
    <div class="contenedor-mensaje">
        <script>
            mensajeEliminar();
        </script>
    </div>
<?php endif;?>



<?php
    include '../includes/footer.php';
?>


