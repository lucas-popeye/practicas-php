<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con GET</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
	</head>
	<body>
		<?php
		if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
			echo "El apellido recibido es: ".$_GET['apellido']."<br>";
			echo "El nombre recibido es: ".$_GET['nombre']."<br>";
		}
		else {
			echo "El nombre o el apellido no se especifica.";
		}

		?>

	</body>
</html>