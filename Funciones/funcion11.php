<?php


function muestra_numero () {
	static $numero = 0;
	$numero =$numero + 1;
	echo $numero . "; ";
}
muestra_numero(); //muestra 1
muestra_numero(); //muestra 2

?>