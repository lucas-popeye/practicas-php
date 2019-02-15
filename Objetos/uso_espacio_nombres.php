<?php
namespace Project;
include ('espacio_nombres.php');
//Muestra el espacio de nombres actual
echo "Espacio de nombres actual = ", __NAMESPACE__,"<br>";
\Biblioteca\miFuncion(); //Llamada al namespace Biblioteca raiz
echo \Biblioteca\PI."<br>";
use \Biblioteca|Animal as ani;//alias de una clase
$gato = new ani();//llamada al alias de la clase Animal
$gato->setColor("negro");
echo "El color del gato es: ".$gato-getColor();
?>