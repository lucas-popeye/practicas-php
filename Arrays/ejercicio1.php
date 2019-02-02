<?php
$tabla1 = array ();
$tabla2 = array ();
$tablasuma = array ();

for ($i=1; $i <=10 ; $i++) { //tabla del 1 al 10
	$tabla1[$i]=$i;
	
}
for ($i=11; $i <=20 ; $i++) { //tabla del 11 al 20
	$tabla2[$i]=$i+10;
	
}
for ($i=1; $i <=10 ; $i++) { //tabla con la misma suma que las otras 2 tablas
	$tablasuma[$i]=$tabla1[$i]+$tabla2[$i];
	
}
//Muestra los valores de la suma de las otras dos tablas
for ($i=1; $i <=10 ; $i++) { 
	echo $tablasuma[$i]."<br>";
}
?>