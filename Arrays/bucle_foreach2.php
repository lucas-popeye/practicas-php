<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
    //Bucle en la tabla
foreach ($tabla as $clave => $val) {
 	//muestra los valores concatenados de la tabla
	//con un salto de línea
	echo "Clave:".$clave.", valor:".$val."<br>";
}
?>