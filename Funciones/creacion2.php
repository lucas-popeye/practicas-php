<?php
function junta_palabra ($palabra1,$palabra2,$palabra3){
	$devuelve = $palabra1." ".$palabra2." ".$palabra3;
	return $devuelve;
}
echo junta_palabra("Hola","Juan","Estefanía");
?>