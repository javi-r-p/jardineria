<!DOCTYPE html>
<html>
    <head>
        <?php
            require('conexion.php');
            if (isset($_GET['id'])) {
                $codigoProducto = $_GET['id'];
            }
            $consulta = mysqli_query($conexion, "SELECT * FROM Productos WHERE CodigoProducto = $codigoProducto");
        ?>
    </head>
    <body>
        <?php
            $nombreProducto = mysqli_fetch_array($consulta);
            echo "<h1>" . $nombreProducto['Nombre'] . "</h1>\n";
        ?>
    </body>
</html>