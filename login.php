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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $telefono = $_POST['telefono'];
            $contrasenia = $_POST['contrasenia'];

            $query = "SELECT * FROM clientes WHERE telefono = ? AND contrasenia = ?";
            if ($stmt = $conexion->prepare($query)) {
                $stmt->bind_param("ss", $telefono, $contrasenia);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "Inicio de sesión exitoso.";
                } else {
                    echo "Error: Usuario no encontrado.";
                }

                $stmt->close();
            } else {
                echo "Error en la preparación de la consulta.";
            }

            $conexion->close();
        }
        ?>

        <form method="post" action="">
            Teléfono: <input type="text" name="telefono" required><br>
            Contraseña: <input type="password" name="contrasenia" required><br>
            <input type="submit" value="Iniciar sesión">
        </form>
	</body>
</html>