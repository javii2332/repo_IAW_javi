<?php
// Generamos una cantidad de segundos al azar entre 0 y 10000
$segundos = rand(0, 10000);

// Convertimos a horas, minutos y segundos
$horas = intdiv($segundos, 3600);
$segundos_restantes = $segundos % 3600;
$minutos = intdiv($segundos_restantes, 60);
$segundos_finales = $segundos_restantes % 60;

// Mostramos el resultado
echo "$segundos segundos son: $horas horas, $minutos minutos y $segundos_finales segundos.";
?>
