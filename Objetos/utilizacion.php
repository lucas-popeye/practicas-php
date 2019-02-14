<?php

//carga de la clase
include ('Animal.php');
include ("interfaces.php");
include ("Gato.class.php");

//instanciar la clase Gato que llama al constructor de la 
//clase Animal
$gato = new Gato("blanco",4);
//llama a los métodos de la interfaz acción
echo $gato->correr();
echo $gato->comer();

?>