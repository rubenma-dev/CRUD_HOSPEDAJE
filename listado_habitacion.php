<?php
session_start();
include 'db.php';

$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    header("location:../index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/registrar.css">
    <link rel="stylesheet" href="CSS/listado.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="./IMG/logo.svg" rel="icon">
</head>
<body>
<?php
$conexiondb = conectardb();
$consulta = "SELECT habitaciones.id_habitaciones, habitaciones.nombre, habitaciones.categoria, habitaciones.detalles, categorias.id_categoria, categorias.categoria FROM habitaciones JOIN categorias ON categorias.id_categoria = habitaciones.categoria";
$resultado = mysqli_query($conexiondb, $consulta);
mysqli_close($conexiondb);
?>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="IMG/logo.svg" alt="">
            </div>

            <span class="logo_name">HOTEL</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="link-name">Reservas</span>
                    </a></li>
                <li><a href="">
                        <i class="uil uil-clipboard-notes"></i>
                        <span class="link-name">Recepción</span>
                    </a></li>
                <li><a href="">
                        <i class="uil uil-bed"></i>
                        <span class="link-name">Habitación</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-file-graph"></i>
                        <span class="link-name">Reportes</span>
                    </a></li>
                <li><a href="">
                        <i class="uil uil-coffee"></i>
                        <span class="link-name">Productos</span>
                    </a></li>
                <li><a href="">
                        <i class="uil uil-setting"></i>
                        <span class="link-name">Configuración</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Cerrar Sesión</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Modo Oscuro</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            <img src="IMG/admin.svg" alt="">
        </div>

        <div class="dash-content">
            <div class="topnav" id="myTopnav">
                <a href="listado_habitacion.php">Habitaciones Existentes</a>
                <a href="index.php">Registrar Habitacion</a>
                <a href="listado_categoria.php">Listado Categoria</a>
                <a href="categoria.php">Registrar Categorias</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="">
                <table class="">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Detalles</th>
                            <th align="left">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 1;
                        while ($habitaciones = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<tr>";
                            echo "<tr>";
                            echo "<tr>";
                            echo "<th scope ='row'>" . $index++ . "</th>";
                            echo "<td align= 'center'>" . $habitaciones['nombre'] . "</td>";
                            echo "<td align= 'center'>" . $habitaciones['categoria'] . "</td>";
                            echo "<td align= 'center'>" . $habitaciones['detalles'] . "</td>";
                            echo "<td>";
                            echo "<a href='editar_habitacion.php?id_habitaciones=" . $habitaciones['id_habitaciones'] . "' class='submitBoton'> Editar </a>";
                            echo "<a href='eliminar_habitacion.php?id_habitaciones=" . $habitaciones['id_habitaciones'] . "' class='submitBotonEliminar'> Borrar </a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <script src="../../JS/script.js"></script>
    <script src="../../JS/registro.js"></script>
</body>
</html>