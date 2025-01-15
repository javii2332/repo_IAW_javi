<?php

$min = 1;
$max = 10;
$n = rand (3, 7);

function generaMatrizEnterosRand(int $n, int $min, int $max): array {
    
    $m = [];
    for ($i=1; $i<=$n; $i++) {
        $m [] = rand($min, $max); 
    }
    return $m;
}

function generaMatrizDecimalRand(int $n, int $min, int $max): array {
    
    $m = [];
    for ($i=1; $i<=$n; $i++) {
        $m [] = rand($min, $max) / 10; 
    }
    return $m;
}


function miArraySum(array $array): int|float {
    $sumar=0;
    foreach ($array as $valor) {
        $sumar += $valor;
    }
    return $sumar; 
}


$enteros = generaMatrizEnterosRand($n, $min, $max);
$decimales = generaMatrizDecimalRand($n, $min, $max);

// Calcula y muestra las sumas
print "Matriz de enteros: " . implode(", ", $enteros) . "\n";
print "Suma de enteros: " . miArraySum($enteros) . "\n\n";

print "Matriz de decimales: " . implode(", ", $decimales) . "\n";
print "Suma de decimales: " . miArraySum($decimales) . "\n";

?>
