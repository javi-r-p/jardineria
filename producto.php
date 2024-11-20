<!DOCTYPE html>
<html>
    <head>
        <?php
            require('conexion.php');
            if (isset($_GET['codigoProducto'])) {
                $codigoProducto = $_GET['codigoProducto'];
            }
            $consulta = mysqli_query($conexion, "SELECT * FROM Productos WHERE CodigoProducto = '$codigoProducto'");
        ?>
    </head>
    <body>
        <?php
            $nombreProducto = mysqli_fetch_array($consulta);
            echo "<h1>" . $nombreProducto['Nombre'] . "</h1>\n";
        ?>
    </body>
</html>