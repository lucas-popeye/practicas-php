<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con POST</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
	</head>
	<body>
		<h2>Página de recepción de las zonas del formulario</h2>
		Nombre: <?php echo $_POST["nombre"];?><br>
		Contraseña: <?php echo $_POST["password"];?><br>
		Sexo: <?php echo $_POST["sexo"];?><br>
		Nacionalidad: <?php echo $_POST["nacionalidad"];?><br>
		País a visitar: <?php if (isset($_POST["pais"])) {//para que no haya
			//error si no selecciona ningún país
				foreach ($_POST["pais"] as $clave => $valor) {
					echo  $valor." ";
				}
		} else{
			echo "Ningún país seleccionado";
		}?>
		<br>
		Idiomas: <?php if (isset($_POST["idioma"])) {//para que no
			//haya error si no selecciona ningún país
			foreach ($_POST as $clave=> $valor) {
				echo $valor." ";
			}
			
		} else {
			echo "Ningún país selecionado";
		}?>
		<br>
		campo oculto:<?php echo $_POST["campo_oculto"];?><br>
		comentario:<?php echo $_POST["comentario"];?><br>
	</body>
</html>