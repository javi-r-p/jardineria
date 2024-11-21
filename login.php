<html>
	<head>
		<title>Iniciar sesión</title>
		<meta charset="UTF-8">
		<?php
			require("conexion.php");
		?>
	</head>
	<body>
		<?php

        ?>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <label>Identificador de cliente</label>
            <input type="number" name="idCliente" required>
            <br>
            <label>Contraseña</label>
            <input type="password" name="contrasenia" required>
            <br>
            <input type="submit" name="enviar" value="Iniciar sesión">
        </form>
        <?php     
        ?>
	</body>
</html>