<?php

function muestra_numero_argumentos($argumento1,$argumento2)
{	echo "El número de argumentos es:".func_num_args();
	
	}
if (function_exists("muestra_numero_argumentos")) {
	echo "La función existe";
}
else {
	echo "La función no existe";
}
?>