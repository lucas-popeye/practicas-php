<?php
//creación de la tabla:
$tabla = array('A1' =>"Juan", "B4"=>"Roberto", 3=>"Pablo", 
	"PEPE"=>"Pedro", "H"=>"Alonso" );
$clave_elemento = array_search("Roberto", $tabla); //ordena la tabla siguiendo  la clave de mayor a menor
echo "La clave del elemento buscado es:".$clave_elemento;

?>