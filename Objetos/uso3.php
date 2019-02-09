<?php

//carga de la clase
include ('Animal.php');

//instanciar la clase Animal con su constructor
$perro1 = new Animal("gris",Animal::PESO_MEDIO);

//llamada al método estático
$perro1::moverse()

?>