<?php
//declaración de la tabla
$data = array('tigre', "leon","vaca");
//llamada de la funcion array_walk
array_walk($data, function (&$item) {
//pasaje por referencia para modificar los valores de la tabla
	$item = ucwords($item);//poner en mayuscula la primera letra
});
//muestra la tabla modificada
var_dump ($data);
?>