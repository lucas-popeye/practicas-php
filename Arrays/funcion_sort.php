<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
sort($tabla); //ordena la tabla
foreach ($tabla as $clave => $valor) {
	echo "Clave:".$clave.", valor:".$valor. "<br>";
}
?>