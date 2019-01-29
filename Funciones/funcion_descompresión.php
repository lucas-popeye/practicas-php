<?php
//función de concatenación con tres parámetros
function concatenación($a,$b,$c){
	return $a." ".$b." ".$c."<br>";
}
//muestra la devolución de la función de concatenación
echo concatenación ("Oveja","León","Tigre");
$tabla1 = ["León","Tigre"];
//muestra la devolución de la función de concatenación
echo concatenación ("Oveja",...$tabla1);
//muestra la devolución de la funcion de concatenación
echo concatenación ("Oveja",...["León","Tigre"]);
?>