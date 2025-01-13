<?php

// Función para generar un grupo de números aleatorios entre 1 y 10
function generarNumerosAleatorios($cantidad) {
    $numeros = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $numeros[] = rand(1, 10); // Genera números aleatorios entre 1 y 10
    }
    return $numeros;
}

// Función para contar cuántas veces aparece cada número
function contarApariciones($numeros) {
    // Usamos la función array_count_values para contar las ocurrencias
    return array_count_values($numeros);
}

// Generamos una cantidad aleatoria de números entre 7 y 20
$cantidad = rand(7, 20);
$numeros = generarNumerosAleatorios($cantidad);

// Mostrar los números generados
print "Números generados: " . implode(", ", $numeros) . "<br>";

// Contar las apariciones de cada número
$apariciones = contarApariciones($numeros);

// Mostrar cuántas veces ha aparecido cada número
print "Apariciones de cada número:<br>";
foreach ($apariciones as $numero => $cantidad) {
    print "Número $numero ha aparecido $cantidad vez/veces.<br>";
}

?>
