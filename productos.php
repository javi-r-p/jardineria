<html>
	<head>
		<title>Catálogo de productos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/productos.css">
		<script src="script.js" type="text/javascript"></script>
		<?php
			require("conexion.php");
			$consulta = mysqli_query($conexion, "SELECT * FROM Productos")
		?>
	</head>
	<body>
		<h1>Catálogo de productos</h1>
		<input type="text" placeholder="Introduce un producto a buscar">
		<aside class="sidenav" id="menu">
			<section><a class="botonCierre" onclick="cerrarMenu()">&#215;</a></section>
			<section><a href="login.php">Iniciar sesión</a></section>
			<section><a href="productos.php">Productos</a></section>
		</aside>
		<?php
			while ($productos = mysqli_fetch_array($consulta)) {
				echo "<section>\n";
				echo "<img src='imagenes/" . $productos['CodigoProducto'] . ".jpg' alt='Imagen de " . $productos['CodigoProducto'] . "'>\n";
				echo "<a href='producto.php?codigoProducto=" . $productos['CodigoProducto'] . "'>" . $productos['Nombre'] . "</a>\n";
				echo "</section>\n";
			}
		?>
	</body>
</html>