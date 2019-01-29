<?php
//función con un número cualquiera de los parámetros
function función_variable (...$argumentos)
{
	echo "El número de parámetros es: ".count($argumentos)."<br>";
	//trasnformación de la tabla en cadena de carácteres.
	echo "Los valores son: ".implode(" ", $argumentos)."<br>";
}
//llamada de la función
función_variable("Tigre");
función_variable("Tigre","León");
función_variable("Tigre","León","Cabra");

?>