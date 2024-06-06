<?php

echo "Por favor ingrese un número: ";

$numero = intval(fgets(STDIN));

echo "\n";

if ($numero % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}

?>