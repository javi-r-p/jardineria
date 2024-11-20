<html>
	<head>
		<title>Catálogo de productos</title>
		<meta charset="UTF-8">
		<?php
			require('conexion.php');
			$consulta = mysqli_query($conexion, "SELECT * FROM Productos")
		?>
	</head>
	<body>
		<h1>Catálogo de productos</h1>
		<input type="text" placeholder="Introduce un producto a buscar">
		<?php
			while ($productos = mysqli_fetch_array($consulta)) {
				echo "<section>\n";
				echo "<img src='" . $productos['CodigoProducto'] . "' alt='Imagen de " . $productos['CodigoProducto'] . "'>\n";
				echo "<a href='producto.php?id=" . $productos['CodigoProducto'] . "'>" . $productos['Nombre'] . "</a>\n";
				echo "</section>\n";
			}
		?>
	</body>
</html>