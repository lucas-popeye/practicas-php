<?php
$tabla1 = array ();
for ($i=1; $i <=10 ; $i++) { //tabla de 1 a 10
	$tabla[$i] = rand(1,100);
}
sort($tabla1);
$valores = implode(";", $tabla1);
echo "Los valores son: ". $valores;
?>