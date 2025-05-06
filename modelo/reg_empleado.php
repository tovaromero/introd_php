<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $id_emp = $_POST['id_empleado'];
        $nombre_emp = $_POST['nombre_empleado'];
        $apellido_emp = $_POST['apellido_empleado'];
        $departamento_emp = $_POST['departamento_empleado'];

        $query = "INSERT INTO Empleado(id_empleado, nombre_empleado, apellido_empleado, id_departamento) VALUES ('$id_emp', '$nombre_emp', '$apellido_emp', '$departamento_emp')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la insercion de los datos: ",mysqli_error($conexion));
        
        if($insercion)
        {
            echo '<script type "text/javascript">
                    alert("Empleado registrado!");
                    window.location.href = "../registrar_empleado.php"
                </script>';
        }
        else
        {
            header('location: ../index.php');
        }
    }
?>