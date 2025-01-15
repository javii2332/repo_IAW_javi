<?php

// Definición de la función generaNumero correctamente
function generaNumero(): int {
    $num = rand(1, 99999999); // Genera un número aleatorio
    return $num;
}

// Definición de la función calculaLetraNIF
function calculaLetraNIF(int $num): string {
    $calcular = $num % 23; // Calcular el índice de la letra
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E']; // Letras posibles del NIF
    return $letras[$calcular]; // Retorna la letra correspondiente
}

// Genera el número y la letra NIF
$num = generaNumero(); // Llamada a generaNumero para obtener un número aleatorio
$letra = calculaLetraNIF($num); // Calcula la letra del NIF

// Mostrar el resultado
print "<p>EL NUMERO DE DNI ES: " . str_pad($num, 8, "0", STR_PAD_LEFT) . $letra . "</p>\n";

?>
