<?php
require('db.php');

$id_categoria = $_GET['id_categoria'];

$conexiondb = conectardb();

$query ="DELETE FROM categorias WHERE id_categoria=".$id_categoria;

$respuesta= mysqli_query($conexiondb, $query);

if ($respuesta) {
    echo "<script>alert('Categoria Eliminada');
    window.location.href='./listado_categoria.php'</script>";
} else {
    echo "<script>alert('No se pudo Eliminar');
    window.location.href='./categoria.php'</script>";
}
?>