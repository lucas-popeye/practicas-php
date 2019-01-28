<?php

function muestra_numero_argumentos ($argumento1,$argumento2) {
	echo "El número de argumentos es: " . func_num_args();
	

}
muestra_numero_argumentos ("Hola","Roberto");
?>