<!DOCTYPE html>
<html lang=«es>
	<head>
		<title>Galeria de fotos</title>
			<meta charset=«UTF-8»>
	</head>
	<body>
		<form action="upload.php" method="POST"
		enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
		<p>Seleccione una foto con un tamaño inferior a 2MB.</p>
		<input type="file" name="photo">
		<br>
		<input type="submit" name="ok" value="Enviar">
		</form>
	</body>
</html>