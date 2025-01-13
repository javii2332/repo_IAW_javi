<?php
// Función para generar una secuencia aleatoria de 10 bits
function generarSecuencia() {
    $secuencia = [];
    for ($i = 0; $i < 10; $i++) {
        $secuencia[] = rand(0, 1); // Generar 0 o 1 aleatoriamente
    }
    return $secuencia;
}

// Generar tres secuencias aleatorias
$secuencia1 = generarSecuencia();
$secuencia2 = generarSecuencia();
$secuencia3 = generarSecuencia();

// Calcular la cuarta secuencia con el bit más común en cada posición
$secuenciaComun = [];
for ($i = 0; $i < 10; $i++) {
    $bits = [$secuencia1[$i], $secuencia2[$i], $secuencia3[$i]];
    $secuenciaComun[] = (array_sum($bits) >= 2) ? 1 : 0; // Bit más común
}

// Función para imprimir una secuencia
function imprimirSecuencia($titulo, $secuencia) {
    print "$titulo: ";
    foreach ($secuencia as $bit) {
        print $bit;
    }
    print "\n";
}

// Imprimir las secuencias
imprimirSecuencia("Secuencia 1", $secuencia1);
imprimirSecuencia("Secuencia 2", $secuencia2);
imprimirSecuencia("Secuencia 3", $secuencia3);
imprimirSecuencia("Secuencia más común", $secuenciaComun);
?>
