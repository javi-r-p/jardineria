<html>
	<head>
		<title>Jardinería</title>
		<meta charset="UTF-8">
		<?php
			require('conexion.php');
			$consulta = mysqli_query($conexion, "SELECT * FROM Productos")
		?>
	</head>
	<body>
		<?php
			while ($productos = mysqli_fetch_array($consulta)) {
				echo $productos['CodigoProducto'] . "<br>";
			}
		?>
	</body>
</html>