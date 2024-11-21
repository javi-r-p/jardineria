<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Jardinería</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/index.css">
		<script src="script.js" type="text/javascript"></script>
		<?php
		require('conexion.php');
		$consulta = mysqli_query($conexion, "SELECT * FROM Productos")
		?>
	</head>
	<body>
		<section class="cuerpo" id="cuerpo">
			<h1>Tienda online de productos de jardinería</h1>
			<button class="botonApertura" onclick="abrirMenu()">&#9776;</button>
		</section>
		<aside class="sidenav" id="menu">
			<section><a class="botonCierre" onclick="cerrarMenu()">&#215;</a></section>
			<section><a href="login.php">Iniciar sesión</a></section>
			<section><a href="productos.php">Productos</a></section>
		</aside>
	</body>
</html>