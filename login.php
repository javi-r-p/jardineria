<html>
	<head>
		<title>Iniciar sesión</title>
		<meta charset="UTF-8">
		<?php
			require('conexion.php');
		?>
	</head>
	<body>
		<?php
        if (isset($_POST['enviar'])) {
            $consulta = "SELECT * FROM Clientes WHERE CodigoCliente = " . $_POST['idCliente']  . " AND" . " Contrasenia = " . $_POST['contrasenia'];
            $resultado = mysqli_query($conexion, $consulta);
            $cliente = mysqli_fetch_array($resultado);
            if (mysqli_num_rows($resultado) > 0) {
                header('Location: index.php');
            } else {
                echo "Credenciales incorrectas.";
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        } else {
        ?>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <label>Identificador de cliente</label>
            <input type="number" name="idCliente" required>
            <br>
            <label>Contraseña</label>
            <input type="password" name="contrasenia" required>
            <input type="submit" name="enviar" value="Iniciar sesión">
        </form>
        <?php
        }
        ?>
	</body>
</html>