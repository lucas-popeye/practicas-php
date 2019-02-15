<?php
//declaración del trait
trait Mitrait
{
	public function Cálculo_impuestos_incluidos ($importe)
	{
		return $importe*1.2; //devuelve el importe impuestos incluidos
	}
}
class Factura
{
	use MiTrait;
}
class Indemnización
{
	use MiTrait;
}

$factura = new Factura;
//muestra el importe impuestos incluidos de la factura
echo $factura->Cálculo_impuestos_incluidos(10)."<br>";

$indemnización = new Indemnización;
//muestra el importe impuestos incluidos de la indemnización
echo $indemnización->Cálculo_impuestos_incluidos(20);
?>