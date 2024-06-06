<?php

$elementos = array();
$promedio = 0;
$valor = 0;

// En este for especifíco los 1000 elementos que quiero para mi array
for ($i = 0; $i < 1000; $i++) {
    $aleatorio = random_int (1, 100);
    $elementos += array ($i=>$aleatorio);
}

echo "\n";
echo "Este array tiene " . count ($elementos) . " elementos";

foreach ($elementos as $elemento=>$valor) {
    $promedio += $valor / count ($elementos);
}

echo "\n\n";
echo "El promedio es: " . $promedio;

// Como los valores aleatorios son del 1 al 100, en 1000 elementos es casi probable que siempre el 1 sea el mínimo y el 100 el máximo.
// Colocan menos de 100 elementos hay más probabilidad que muestre diferentes mínimos y máximos.

sort($elementos); 

echo "\n\n";
echo "El valor menor es: " . $elementos[0];

echo "\n";
echo "El valor mayor es: " . $elementos[count ($elementos) - 1];
echo "\n\n";

?>