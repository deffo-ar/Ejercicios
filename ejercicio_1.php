<?php

echo "Por favor ingrese su nombre: ";
$usuario = trim (fgets(STDIN));

echo "\n";

if ($usuario != "") {
    echo "Bienvenido " . $usuario . ", ya puedes navegar nuestra página.";
} else {
    echo "Debe ingresar un nombre.";
}

?>