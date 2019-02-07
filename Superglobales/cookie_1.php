<?php

setcookie("nombre","Juan");

//¡Recargar la página!
if (isset($_COOKIE['nombre'])) {//comprueba si la cookie está presente
	echo "El nombre en cookie es ".$_COOKIE['nombre'];
}
?>