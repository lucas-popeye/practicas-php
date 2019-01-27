<?php
declare (strict_types=1);

//declaración de una función que devuelve un tipo entero
function muestra() : int {
	return "1";//La función devuelve de hecho una cadena de carácteres
}

try {
	muestra(); //llamada de la función
} catch (TypeError $e) {
	echo ($e->getMessage());

}
?>