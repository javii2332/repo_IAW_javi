<?php
// Generamos dos números al azar entre 0 y 100
$num1 = rand(0, 100);
$num2 = rand(0, 100);

// Calculamos la media aritmética
$media = ($num1 + $num2) / 2;

// Mostramos los números y la media
echo "Número 1: $num1<br>";
echo "Número 2: $num2<br>";
echo "Media aritmética: $media";
?>
