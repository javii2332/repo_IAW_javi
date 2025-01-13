<?php
// Generamos dos tiradas de dados entre 1 y 6
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Calculamos la suma
$suma = $dado1 + $dado2;

// Mostramos el resultado
echo "Dado 1: $dado1<br>";
echo "Dado 2: $dado2<br>";
echo "Resultado total: $suma";
?>
