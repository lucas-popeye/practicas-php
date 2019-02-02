<?php

$nombre = "Juan";
$apellido = "Gómez";

function concatena() {
	$GLOBALS['nombre'] = $GLOBALS['nombre']." ".$GLOBALS['apellido'];
}

concatena (); //concatena el nombre y el apellido
echo $nombre;

?>