<?php
require('db.php');

$id_habitacion = $_GET['id_habitaciones'];

$conexiondb = conectardb();

$query ="DELETE FROM habitaciones WHERE id_habitaciones=".$id_habitacion;

$respuesta= mysqli_query($conexiondb, $query);

if ($respuesta) {
    echo "<script>alert('Registro Eliminado');
    window.location.href='listado_habitacion.php'</script>";
} else {
    echo "<script>alert('No se elimino el registro');
    window.location.href='listado_habitacion.php'</script>";
}
?>