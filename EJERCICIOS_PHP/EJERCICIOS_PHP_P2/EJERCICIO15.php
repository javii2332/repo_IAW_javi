<?php

$valores = ["uno", "dos", "tres", "cuatro", "cinco", "seis"];
$dado = rand(1, 6); // Generar un número aleatorio entre 1 y 6

// Obtener el valor en letras desde el vector
$valor_letras = $valores[$dado - 1]; // Restamos 1 porque los índices del array comienzan en 0

// Mostrar el resultado
print "TIRADA DE DADO: $dado<br>";
print "VALOR EN LETRAS: $valor_letras";
?>
