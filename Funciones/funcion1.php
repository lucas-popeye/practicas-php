<?php
function calculo_iva ($precio_bruto) {
	return $precio_bruto*1.21;
}
$precio_iva = calculo_iva (12);
echo "12 euros sin IVA corresponden a " .$precio_iva. " euros con IVA";

?>