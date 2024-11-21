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
            $producto = mysqli_fetch_array($consulta);
            echo "<h1>" . $producto['Nombre'] . "</h1>\n";
            echo "<img src='imagenes/" . $producto['CodigoProducto'] . ".jpg'>\n";
        ?>
    </body>
</html>