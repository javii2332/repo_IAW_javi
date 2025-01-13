<?php
// Crear un array para almacenar los 10 primeros números pares
$numpares = [];

// Usar un contador para encontrar los pares
$contador = 0;

// Generar los 10 primeros números pares usando un bucle for
for ($i = 1; $contador < 10; $i++) {
    if ($i % 2 == 0) { // Comprobar si el número es par
        $numpares[] = $i; // Añadir el número par al array
        $contador++; // Incrementar el contador de pares
    }
}

// Imprimir los números pares utilizando foreach
print "10 PRIMEROS NÚMEROS PARES:\n";
foreach ($numpares as $valor) {
    print $valor . "\n";
}
?>
