<?php
$tab_caracteristica_PABLO = array ("nombre"=>"Pablo", "profesión"=>
	"ministro","edad"=>"50");
$tab_caracteristica_ROBERTO = array ("nombre"=>"Roberto", "profesión"=>
	"agricultor","edad"=>"45");
$tab_persona ["PABLO"] = $tab_caracteristica_PABLO;
$tab_persona ["ROBERTO"] = $tab_caracteristica_ROBERTO;

echo $tab_persona ["ROBERTO"] ["profesión"];
?>