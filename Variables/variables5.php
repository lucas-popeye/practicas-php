<?php

$nombre = "Juan";
function muestra_palabra () {
	global $nombre;
	echo $nombre;
}
muestra_palabra();
?>