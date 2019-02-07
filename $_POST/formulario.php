<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Ejercicio con POST</title>
			<meta http-equiv="Content-Type" content="text/html;
			 charset=UTF-8">
	</head>
	<body>
		<form action="recibe_post.php" method="POST" name="formulario">
		<h2>Formulario general de envío</h2>
		Nombre: <input type="text" name="nombre" value=""><br>
		Contraseña: <input type="password" name="password"><br>
		<br>
		Sexo: <input type="radio" name="sexo" value="F">Mujer
		<input type="radio" name="sexo" value="M">Hombre
		<input type="radio" name="sexo" value="N" checked="checked">No sabe<br>
		<br>
		Nacionalidad:<select name="nacionalidad">
			<option value="F">Francesa</option>
			<option value="E">Española</option>
			<option value="R">Rusa</option>
			<option value="A">Alemana</option>
			</select><br>
			<br>
		Países que se desea visitar:<br>
		<select name="pais[]" multiple="multiple">
			<option>Francia</option>
			<option>España</option>
			<option>Rusia</option>
			<option>Alemania</option>
		</select><br>
		<br>
		Idiomas:<br>
		<input type="checkbox" name="idioma[]" value="F">Francés<br>
		<input type="checkbox" name="idioma[]" value="E">Español<br>
		<input type="checkbox" name="idioma[]" value="R">Ruso<br>
		<input type="checkbox" name="idioma[]" value="A">Alemán<br>

		<input type="hidden" name="campo_oculto" value="campo_oculto"><br>
		Comentario:<br>
		<textarea name="comentario"></textarea><br>

		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="anular" value="Borrar">
		</form>
	</body>
</html>