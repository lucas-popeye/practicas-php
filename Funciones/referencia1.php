<?php

function añadir_señor ($argumento){
	$argumento = $argumento . " Señor";

}

$texto = "Hola";
añadir_señor ($texto);
echo $texto;

?>