<html>
	<head>
		<title>Catálogo de productos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/productos.css">
		<script src="script.js" type="text/javascript"></script>
		<?php
			require("conexion.php");
		?>
	</head>
	<body>
		<section id="cuerpo" class="cuerpo">
			<h1>Catálogo de productos</h1>
			<button class="botonApertura" onclick="abrirMenu()">&#9776;</button>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
				<input type="text" name="busqueda" placeholder="Introduce un producto a buscar">
				<input type="submit" name="ENVIAR" value="Hacer búsqueda">
			</form>
		</section>
		<aside class="sidenav" id="menu">
			<section><a class="botonCierre" onclick="cerrarMenu()">&#215;</a></section>
			<section><a href="login.php">Iniciar sesión</a></section>
			<section><a href="productos.php">Productos</a></section>
		</aside>
		<?php
			if (isset($_GET['ENVIAR'])) {
				$busqueda = $_GET['busqueda'];
				$consulta = mysqli_query($conexion, "SELECT Nombre, CodigoProducto, PrecioVenta FROM Productos WHERE Nombre LIKE '%$busqueda%'");
				echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='GET'>";
				echo "<input type='submit' name='BORRAR' value='Limpiar búsqueda'>";
				echo "</form>";
				while ($productos = mysqli_fetch_array($consulta)) {
					echo "<section class='articulo'>\n";
					echo "<img src='imagenes/" . $productos['CodigoProducto'] . ".jpg' alt='Imagen de " . $productos['CodigoProducto'] . "'>\n";
					echo "<a href='producto.php?codigoProducto=" . $productos['CodigoProducto'] . "'>" . $productos['Nombre'] . "</a>\n";
					echo "<p>" . $productos['PrecioVenta'] . " &#8364;</p>\n";
					echo "</section>\n";
				}
				if (isset($_GET['BORRAR'])) {
					unset($_GET);
				}
			} else {
				$consulta = mysqli_query($conexion, "SELECT * FROM Productos");
				while ($productos = mysqli_fetch_array($consulta)) {
					echo "<section class='articulo'>\n";
					echo "<img src='imagenes/" . $productos['CodigoProducto'] . ".jpg' alt='Imagen de " . $productos['CodigoProducto'] . "'>\n";
					echo "<a href='producto.php?codigoProducto=" . $productos['CodigoProducto'] . "'>" . $productos['Nombre'] . "</a>\n";
					echo "<p>" . $productos['PrecioVenta'] . " &#8364;</p>\n";
					echo "</section>\n";
				}
			}
			mysqli_free_result($consulta);
			mysqli_close($conexion);
		?>
	</body>
</html>