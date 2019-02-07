<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con REQUEST</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
			 <SCRIPT lenguaje="JAVASCRIPT">
			 	function enviar_formulario(){
			 		//llama la página recibe_post.php con transmisión de las
			 		//variables en la URL
		document.location.href="recibe_post.php?nombre="+document.formulario.
		nombre.value+"&apellido="+document.formulario.apellido.value;
			 	}
			 </SCRIPT>
	</head>
	<body>
	<form action="recibe_post.php" method="POST" name="formulario">
		<h2>Formulario de envío de los apellidos y del nombre</h2>
		Nombre: <input type="text" name="nombre"><br>
		Apellidos: <input type="text" name="apellido"><br>
		<input type="submit" name="enviarPOST" value="Enviar por POST">
		<input type="button" name="enviarGET" value="Enviar por GET"
		onclick="enviar_formulario()">
	</form>
	</body>
</html>
