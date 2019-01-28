<?php

function añadir_señor (&$argumento){ //paso por referencia
	$argumento = $argumento . " Señor";

}

$texto = "Hola";
añadir_señor ($texto);
echo $texto;

?>