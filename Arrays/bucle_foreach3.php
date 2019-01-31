<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
    //Bucle en la tabla
foreach ($tabla as $val) {
 	//muestra los valores concatenados de la tabla
	//con un salto de línea
	echo "Valor:".$val."<br>";
}
?>