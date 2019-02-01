<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
ksort($tabla); //ordena la tabla siguiendo  la clave
foreach ($tabla as $clave => $valor) {
	echo "Clave:".$clave.", valor:".$valor. "<br>";
}
?>