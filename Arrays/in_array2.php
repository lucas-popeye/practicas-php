<?php
//creación de la tabla:
$tabla = array("10","32","33","78");
if (in_array(33, $tabla,true)) {//añadir true para tener en cuenta el tipo
	echo "33 está en la tabla";
}
else {
	echo "33 no está en la tabla";
}
?>