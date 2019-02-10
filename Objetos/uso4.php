<?php

//carga de la clase
include ('Animal3.php');

//instanciar la clase Animal
$perro = new Animal("rojo",10);
//instanciar la clase Animal
$perro2 = new Animal("gris",5);
//instanciar la clase Animal
$perro3 = new Animal("negro",15);
//instanciar la clase Animal
$perro4 = new Animal("blanco",8);

//llamada al métod estático
echo "Número de animales que se han instanciado: ".Animal::getContador();

?>