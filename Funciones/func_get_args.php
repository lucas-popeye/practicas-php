<?php

function muestra_argumentos($argumento1,$argumento2)
{
	$num_args = func_num_args();
	$arg_lista = func_get_args();
	for ($i=0; $i < $num_args; $i++) { 
		echo "El argumento $i es : ". $arg_lista[$i] . "<br>";
	}
}
?>