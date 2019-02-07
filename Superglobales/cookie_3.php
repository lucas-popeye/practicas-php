<?php

$tabla =  array('Juan','Roberto','Ana');
$tiempo_expiracion = 365 * 24 * 3600; //tiempo en segundos relativo a un año
$cadena_serializada = serialize($tabla); //serialización de la tabla
setcookie("serializa", $cadena_serializada,time()+$tiempo_expiracion);

//¡Recargar la página!
if (isset($_COOKIE["serializa"])) { //comprueba si la cookie está presente
	$nueva_tabla = unserialize($_COOKIE["serializa"]); //deserializa 
	print_r($nueva_tabla); //muestra los valores de la tabla
}
?>