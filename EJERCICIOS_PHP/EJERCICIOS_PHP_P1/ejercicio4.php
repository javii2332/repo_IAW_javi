<?php
// Generamos horas, minutos y segundos al azar entre 0 y 150
$horas = rand(0, 150);
$minutos = rand(0, 150);
$segundos = rand(0, 150);

// Convertimos todo a segundos
$total_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

// Mostramos los valores y el total en segundos
echo "Horas: $horas<br>";
echo "Minutos: $minutos<br>";
echo "Segundos: $segundos<br>";
echo "Total en segundos: $total_segundos";
?>
