<?php

//carga de la clase
include ('Animal.php');

//instanciar la clase Animal
$perro = new Animal();

//actualizar el peso del perro
$perro->setPeso(18);
//leer el peso
echo "El peso del perro es: ".$perro->getPeso()."kg<br>";
//actualizar el color del perro
$perro->setColor("negro");
//leer el color
echo "El color del perro es: ".$perro->getColor()."<br>";

//instanciar la clase Animal
$gato = new Animal();

//actualizar el peso del gato
$gato->setPeso(5);
//leer el peso
echo "El peso del gato es: ".$gato->getPeso()."kg<br>";
//actualizar el color del gato
$gato>setColor("blanco");
//leer el color
echo "El color del gato es: ".$gato->getColor()."<br>";


?>