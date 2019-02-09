<?php

//carga de la clase
include ('Animal2.php');

//instanciar la clase Animal con su constructor
$perro = new Animal("beige",7);

//leer el peso
echo "El peso del perro es: ".$perro->getPeso()."kg<br>";
//leer el color
echo "El color del perro es: ".$perro->getColor()."<br>";

//actualizar el color del perro
$perro->setColor("negro");
//leer el color
echo "El color del perro es: ".$perro->getColor()."<br>";

?>