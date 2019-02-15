<?php
//Definición del espacio de nombres.
namespace Biblioteca;
//Definición de una constante.
const PI = 3.1416;
//Definición de una función
function miFuncion() {
echo "Hola <br>";
}
//Definición de una clase.
class Animal 

{
	//declaración de los atributos
	private $color = "gris";
	//accesos
	public function getColor ()
	{
		return $this->color;//devuelve el color
	}
	public function setColor($color)
	{
		$this->color = $color; //escribe en el atributo color
		
	}
	}

?>