<?php

//carga de la clase
include ('Animal.php');

//instanciar la clase Animal
$gato = new Animal();

//actualizar el peso del gato
$gato->setPeso(8);
//leer el peso
echo "El peso del gato es: ".$gato->getPeso()."kg<br>";
//actualizar el color del gato
$gato>setColor("negro");
//leer el color
echo "El color del gato es: ".$gato->getColor()."<br>";

//instanciar la clase Animal
$pez = new Animal();

//actualizar el peso del pez
$pez->setPeso(1);
//leer el peso
echo "El peso del pez es: ".$pez->getPeso()."kg<br>";
//actualizar el color del pez
$pez->setColor("blanco");
//leer el color
echo "El color del pez es: ".$pez->getColor()."<br>";

//el gato come al pez
$gato->comer_animal($pez);
//leer el peso
echo "El nuevo peso del gato es ".$gato->getPeso ()."kg<br>";
//leer el peso
echo "El peso del pez es ".$pez->getPeso ()."kg<br>";
//leer el color
echo "El color del pez es: ".$pez->getColor()."<br>";

?>