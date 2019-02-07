<?php

session_start();
$_SESSION['nombre'] = "Juan";

echo "El nombre en sesión siempre es: ".$_SESSION['nombre'];
?>