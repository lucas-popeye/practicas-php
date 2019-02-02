<?php
$tab_caracteristica_ESTEFANIA = array ("nombre"=>"Pablo", "profesión"=>
	"ministro","edad"=>"50");
$tab_caracteristica_LUNA = array ("nombre"=>"Roberto", "profesión"=>
	"agricultor","edad"=>"45");
$tab_persona ["ESTEFANIA"] = $tab_caracteristica_ESTEFANIA;
$tab_persona ["LUNA"] = $tab_caracteristica_LUNA;

echo '<table border="1">';
echo '<tr><td>';
echo 'clave';
echo '</td><td colspan="2">';
echo 'Valor';
echo '</td></tr>';

foreach ($tab_persona as $clave => $val) {
	//$clave corresponde a ESTEFANIA o LUNA
	echo '<tr><td colsepan="4">';
	echo $clave;
	echo '</td>';
	echo '<td>Clave</td><td>Valor</td></tr>';
//bucle en la tabla $val corresponde a $tab_caracteristica_ESTEFANIA o
//$tab_caracteristica_LUNA
	foreach ($val as $clave2 => $val2) {
		echo '<tr>';
	    echo '<td>'.$clave2.'</td>';
	    echo '<td>'.$val2.'</td>';
	    echo '</tr>';
	}
	
}
?>