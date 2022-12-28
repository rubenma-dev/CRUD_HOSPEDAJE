<?php
include('db.php');
    $nombre=$_POST['nombre'];
    $categoria=$_POST['categoria'];
    $detalles=$_POST['detalles'];

    $conexiondb = conectardb();

    $query = "INSERT INTO habitaciones(nombre, categoria, detalles) VALUES
    ('$nombre', '$categoria', '$detalles')";

    $respuesta = mysqli_query($conexiondb, $query);

    if($respuesta){
        echo "<script>alert('Se registro la habitacion');
            window.location.href='./index.php'</script>";
    }else{
        echo "<script>alert('No se pudo registrar');
                window.location.href='./index.php'</script>";
    }
    mysqli_close($conexiondb);
?>