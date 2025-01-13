<?php

$dado1=rand (1,6);
$dado2=rand (1,6);

print "Dado 1: $dado1<br>";
print "Dado 2: $dado2<br>";

if ($dado1 % 2 == 0 && $dado2 % 2 != 0) {
    print "¡Objetivo cumplido! El primer dado es par y el segundo es impar.";
} else {
    print "No se cumple el objetivo de paridad.";
}
?>