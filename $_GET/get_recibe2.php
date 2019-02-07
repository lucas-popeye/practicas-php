<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con GET</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
	</head>
	<body>
		<?php
		if (isset($_GET['numero'])) {//comprueba que el argumento número
									 //está especificado
			$numero = (int)$_GET["numero"]; //transformación en numérico
			if ($numero > 0 && $numero < 100) {//numero comprendido entre 0 y 99
				for ($i=1; $i <= $_GET["numero"] ; $i++) { 
				echo "¡Hola!"."<br>";
			}
			
			
		}
		else {
			echo "El número no está especificado.";
		}
	}
		?>

	</body>
</html>
