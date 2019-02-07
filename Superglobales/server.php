<?php
if (!isset ($_SERVER['PHP_AUTH_USER'])) {
	header('www-Authenticate:Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo "Texto si el visitante utiliza el botón de cancelar";
	exit;
} else
echo "Hola, {$_SERVER['PHP_AUTH_USER']}.<br>";
echo "Su contraseña es {$_SERVER['PHP_AUTH_PW']}.<br>";
?>