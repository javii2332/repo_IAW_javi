<?php

// Función para generar un grupo de números aleatorios entre 1 y 10
function generarNumerosAleatorios($cantidad) {
    $numeros = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $numeros[] = rand(1, 10); // Genera números aleatorios entre 1 y 10
    }
    return $numeros;
}

// Función para obtener el número más alto
function obtenerMaximo($numeros) {
    return max($numeros);
}

// Función para obtener el número más bajo
function obtenerMinimo($numeros) {
    return min($numeros);
}

// Generamos una cantidad aleatoria de números entre 5 y 10
$cantidad = rand(5, 10);
$numeros = generarNumerosAleatorios($cantidad);

// Mostrar los números generados
print "Números generados: " . implode(", ", $numeros) . "<br>";

// Mostrar el número más alto y más bajo
print "Número más alto: " . obtenerMaximo($numeros) . "<br>";
print "Número más bajo: " . obtenerMinimo($numeros) . "<br>";

?>
