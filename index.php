<html>
	<head>
		<title>Jardinería</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/index.css">
		<?php
			require('conexion.php');
			$consulta = mysqli_query($conexion, "SELECT * FROM Productos")
		?>
	</head>
	<body>
		<h1>Tienda online de productos de jardinería</h1>
		<?php
		?>
	</body>
</html>