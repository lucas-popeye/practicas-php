<?php

session_start();
$_SESSION['nombre'] = "Juan";

echo "El nombre en sesión es: ".$_SESSION['nombre'];
?>