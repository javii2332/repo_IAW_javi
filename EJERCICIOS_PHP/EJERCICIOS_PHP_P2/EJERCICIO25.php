<?php

// Resultados de las carreras en un array bidimensional
$clasificacion = [
    'Alonso' => ['Valencia' => 1, 'China' => 1, 'Brasil' => 1],
    'Hamilton' => ['Valencia' => 4, 'China' => 4, 'Brasil' => 4],
    'Massa' => ['Valencia' => 2, 'China' => 2, 'Brasil' => 2],
    'Raikonen' => ['Valencia' => 3, 'China' => 3, 'Brasil' => 3]
];

// Puntos según la posición obtenida en cada carrera
$puntos = [
    1 => 10,
    2 => 8,
    3 => 7,
    4 => 6,
    5 => 4,
    6 => 3,
    7 => 2,
    8 => 1
];

// Array para almacenar los puntos totales de cada piloto
$puntosPilotos = [];

// Recorremos las carreras y calculamos los puntos de cada piloto
foreach ($clasificacion as $piloto => $resultados) {
    $puntosTotales = 0; // Inicializamos el total de puntos para cada piloto

    // Recorremos los resultados de cada carrera para el piloto
    foreach ($resultados as $carrera => $posicion) {
        // Sumamos los puntos según la posición obtenida en cada carrera
        $puntosTotales += $puntos[$posicion];
    }

    // Guardamos el total de puntos del piloto
    $puntosPilotos[$piloto] = $puntosTotales;
}

// Ordenamos los pilotos por puntos de mayor a menor
arsort($puntosPilotos);

// Mostrar la clasificación final
print "Clasificación del mundial de Fórmula 1:\n";
foreach ($puntosPilotos as $piloto => $totalPuntos) {
    print "$piloto: $totalPuntos puntos\n";
}

?>
