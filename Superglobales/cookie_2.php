<?php

$tiempo_expiracion = 365 * 24 * 3600; //tiempo en segundos relativo a 1 año
setcookie("nombre","Juan", time()+$tiempo_expiracion);

//¡Recargar la página!
if (isset($_COOKIE['nombre'])) {//comprueba si la cookie está presente
	echo "El nombre en cookie es: ".$_COOKIE['nombre'];
}
?>