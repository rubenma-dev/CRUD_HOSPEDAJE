<?php
        include('db.php');
        $categoria=$_POST['nombre'];
        $piso=$_POST['piso'];
        $tarifa=$_POST['tarifa'];
        
        $conexiondb = conectardb();

        $query = "INSERT INTO categorias (categoria, piso, tarifa) VALUES 
            ('$categoria', '$piso',$tarifa)";
        
        $respuesta = mysqli_query($conexiondb, $query);

        if ($respuesta) {
                echo "<script>alert('Registro Exitoso');
                                        window.location.href='./categoria.php'</script>";
            } else {
                echo "<script>alert('Registro Fallido');
                                        window.location.href='./categoria.php'</script>";
            }
          mysqli_close($conexiondb);
?>