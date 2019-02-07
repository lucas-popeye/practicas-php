<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con REQUEST</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
	</head>
	<body>
		<h2>Recuperación de datos por $_POST y $_GET</h2>
		<?php
		if (isset($_REQUEST["apellido"])) {
			echo "Su apellido es: ".$_REQUEST['apellido']."<br>";
		}
		if (isset($_REQUEST["nombre"])) {
			echo "Su nombre es: ".$_REQUEST['nombre'];
			# code...
		}
		?>
	</body>
</html>