<?php
// Generar un número aleatorio entre 1 y 10 para decidir cuántos dados tirar
$num_dados = rand(1, 10);
$total = 0; // Inicializar el total

// Mostrar los resultados de cada dado
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6); // Generar un valor aleatorio entre 1 y 6 para cada dado
    $total += $dado; // Acumular el resultado de cada dado en el total
    print "<p>RESULTADO DADO $i = $dado</p>";
}

// Mostrar el total de puntos obtenidos
print "<p>TOTAL = $total</p>";
?>
