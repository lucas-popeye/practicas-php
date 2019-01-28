<?php

function muestra_argumentos ($argumento1,$argumento2) {
	echo "El valor del primer argumento es: " . func_get_arg(0)."<br>";
	echo "El valor del segundo argumento es: " . func_get_arg(1);

}
muestra_argumentos ("Hola","Roberto");
?>