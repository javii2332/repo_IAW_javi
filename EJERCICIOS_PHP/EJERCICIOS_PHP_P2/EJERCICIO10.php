<?php
// Generar un número aleatorio entre 1 y 10 para decidir cuántos dados tirar
$num_dados= rand(1, 10);

// Inicializar los contadores para los valores pares e impares
$tot_pares = 0;
$tot_impares = 0;

// Tirar los dados y contar los valores pares e impares
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6); // Generar un valor aleatorio entre 1 y 6 para cada dado
    if ($dado % 2 == 0) {
        $tot_pares++; // Si es par, incrementar el contador de pares
    } else {
        $tot_impares++; // Si es impar, incrementar el contador de impares
    }
    print "<p>RESULTADO DADO $i = $dado</p>";
}

// Mostrar el número de valores pares e impares
print "<p>Número de valores pares: $tot_pares</p>";
print "<p>Número de valores impares: $tot_impares</p>";
?>
