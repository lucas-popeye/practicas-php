<?php
//declaración de una función que devuelve un tipo string o null
//y que toma como parámetro un tipo string o null
function test(?string $name): ?string
{
	return $name;
}
var_dump(test(null)); //llamada de la función con NULL
echo "<br>";
var_dump(test("Hola")); //llamada de la funcion
						//con una cadena de carácteres
?>