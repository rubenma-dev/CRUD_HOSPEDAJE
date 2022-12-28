<?php
include('db.php');
$nombre = $_POST['nombre'];
$categoria=$_POST['categoria'];
$detalles=$_POST['detalles'];

$conexion = conectardb();

$id_habitaciones = $_POST['habitacion'];
$query = "UPDATE habitaciones SET nombre='" .$nombre . "', categoria='". $categoria . "', detalles='" . $detalles . "' WHERE id_habitaciones=" . $id_habitaciones;

$respuesta= mysqli_query($conexion, $query);

if($respuesta){
    echo"<script>alert('Se edito correctamente');
            window.location.href='listado_habitacion.php'</script>";
}else{
    echo"<script>alert('No se pudo editar');
            window.location.href='listado_habitacion.php'</alert>";
}
mysqli_close($conexiondb);
?>