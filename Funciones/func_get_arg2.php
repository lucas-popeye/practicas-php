<?php

function incrementa ($i){
	$i++;
	var_dump(func_get_arg(0));
}
incrementa (1);
?>