<?php

echo "Por favor ingrese un número: ";

$numero = intval(fgets(STDIN));
$pares = 0;

for ($n = 0; $n <= $numero; $n++) {
    if ($n % 2 == 0) {
        $pares += $n;
    }
}

echo "\n";
echo "Los números pares de " . $numero . " suman " . $pares;


?>