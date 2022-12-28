<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $db = 'habitacion';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $db);

        return $conexion;
    }
?>