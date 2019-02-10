<?php
namespace fub;
 
include 'perro/perro.php';
include 'gato/gato.php';
include 'pez/pez.php';

use foo as felino;
use bar as canino;
use animal as marino;

echo felino/gato::decir();
echo canino/perro::dice();
echo marino/pez::hace();
?>
