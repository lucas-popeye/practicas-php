<?php
function multiplier ($a,$b)
{
	if (!is_numeric($a) || !is_numeric($b)) 
	{
		throw new Exception("Los dos parámetros deben ser números");
		
	}
	return $a + $b;
}
try //Probar las instrucciones en este bloque.
{
	echo multiplier (10,3) . "<br>";
	echo multiplier ("Hola",20);
	
} catch (Exception $e) //Se ejecutará la excepción.
{
	echo "Se ha producido una excepción. Mensaje de error: ",
$e->getMessage ();
}
finally {
	echo "<br>";
	echo "Fin"; // Fin del script.
}

?>