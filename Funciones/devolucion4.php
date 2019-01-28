<?php

//función de intercambio que puede no devolver nada

function intercambio (&$izquierda, &$derecha) : void
{
	if ($izquierda === $derecha) {
		return
	}
	$temp = $izquierda;
	$izquierda = $derecha;
	$derecha = $temp;
}

$x=1;
$y=2;
var_dump(intercambio($x,$y), $x,$y ); //lamada de la función intercambio
?>