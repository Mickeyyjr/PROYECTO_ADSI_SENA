<?php


//Función para registrar a los usuarios 
function registrarUsuarios()
{
    try {
        include 'conexion.php';

        if (isset($_POST['id_persona'], $_POST['tipo_id'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['rol'])) {
            $id_persona = $_POST['id_persona'];
            $tipo_id = $_POST['tipo_id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $rol = $_POST['rol'];

            $sql = "INSERT INTO persona(id_persona, tipo_id, nombres, apellidos, email, rol)
                        VALUES('$id_persona', '$tipo_id', '$nombre', '$apellido', '$email', '$rol');";

            if ($db->query($sql) === true) {
                echo 'Datos insertados correctamente';
            } else {
                die('Error al insertar datos .$db->error');
            }
        };
    } catch (\Throwable $th) {

        var_dump($th);
    }
};




//Función para mostrar los registros
function mostrarRegistros()
{
    try {

        include 'conexion.php';

        $registrosPersona = 'SELECT * FROM persona;';
        $consulta = mysqli_query($db, $registrosPersona);

        $registros = [];
        $i = 0;

        while ($row = mysqli_fetch_assoc($consulta)) {
            $registros[$i]['id_persona'] = $row['id_persona'];
            $registros[$i]['tipo_identificacion'] =  $row['tipo_identificacion'];
            $registros[$i]['nombres'] =  $row['nombres'];
            $registros[$i]['apellidos'] =  $row['apellidos'];
            $registros[$i]['email'] = $row['email'];
            $registros[$i]['rol'] =  $row['rol'];

            $i++;
        }

        return $registros;
    } catch (\Throwable $th) {

        var_dump($th);
    }
}
