<?php
	//declaración de la función inversa
 function inversa ($x){
	if ($x == 0) {
		//iniciación de la excepción
		throw new Exception("División por 0");
		
	}
	return 1/$x;
}

//prueba de la inversa de 3
try {
	echo inversa (3)."<br>";
} catch (Exception $e) {
	//recuperación de la excepcion
	echo "excepción: ", $e->getMessage(),"<br>";
} finally {
	echo "Fin del primer bloque.<br>";
}

//prueba de la inversa de 0
try {
	echo inversa (0)."<br>";
} catch (Exception $e) {
	//recuperación de la excepcion
	echo "excepción: ", $e->getMessage(),"<br>";
} finally {
	echo "Fin del segundo bloque.<br>";
}

//continua la ejecución
echo "¡continuación del programa!";
?>
