<?php

$elementos = array();
$promedio = 0;
$valor = 0;

// En este for especifíco los 120 elementos que quiero para mi array
for ($i = 0; $i < 120; $i++) {
    $aleatorio = random_int (1, 10);
    $elementos += array ($i=>$aleatorio);
}

echo "\n";
echo "Este array tiene " . count ($elementos) . " elementos";

foreach ($elementos as $elemento=>$valor) {
    $promedio += $valor / count ($elementos);
}

echo "\n\n";
echo "El promedio es: " . $promedio;

?>