 <?php

//carga de la clase
include ('Animal.php');
include ("Pez.class.php");
include ("Gato.class.php");

//instanciar la clase Pez que llama al constructor de
//la clase Animal
$pez = new Pez("gris",8);
//actualizar el tipo de pez
$pez->setType(true);
//instanciar la clase Gato que llama al constructor de la 
//clase Animal
$gato = new Gato("blanco",4);
//llamada al método respira()
$pez->respira();
$gato->respira();


//llamada al método mostrando los atributos de la clase Pez
//y animal
$pez->comer_animal($otro_pez);
//leer el tipo con el acceso de su propia clase
echo "El tipo de pez comido es es: ".$otro_pez->getType()."<br>";
//leer el peso con el acceso de su propia clase
echo "El peso de pez comido es es: ".$otro_pez->getPeso()."Kg<br>";
?>