<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/producto.css">
        <?php
            require("conexion.php");
            if (isset($_GET['codigoProducto'])) {
                $codigoProducto = $_GET['codigoProducto'];
            }
            $consulta = mysqli_query($conexion, "SELECT * FROM Productos WHERE CodigoProducto = '$codigoProducto'");
            $producto = mysqli_fetch_array($consulta);
            echo "<title>" . $producto['Nombre'] . "</title>";
        ?>
    </head>
    <body>
        <?php
            echo "<img src='imagenes/" . $producto['CodigoProducto'] . ".jpg'>\n";
            echo "<section class='infoProducto'>\n";
            echo "<h2>" . $producto['Nombre'] . "</h2>\n";
            echo "<h2>" . $producto['PrecioVenta'] . " 	&#8364;</h2>\n";
            echo "<h3>Gama: " . $producto['Gama'] . "</h3>\n";
            echo "<h3>Dimensiones del artículo: " . $producto['Dimensiones'] . "</h3>\n";
            echo "<h3>Quedan " . $producto['CantidadEnStock'] . " unidades en stock</h3>\n";
            echo "<p>" . $producto['Descripcion'] . "</p>\n";
            echo "</section>\n";
            mysqli_free_result($consulta);
            mysqli_close($conexion);
        ?>
    </body>
</html>