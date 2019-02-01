<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
krsort($tabla); //ordena la tabla siguiendo  la clave de mayor a menor
foreach ($tabla as $clave => $valor) {
	echo "Clave:".$clave.", valor:".$valor. "<br>";
}
?>