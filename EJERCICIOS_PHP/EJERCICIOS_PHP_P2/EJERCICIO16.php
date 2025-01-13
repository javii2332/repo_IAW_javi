<?php
// Generar un número aleatorio de dados entre 2 y 7
$dados = rand(2, 7);

// Crear un array para almacenar los valores de la tirada
$tiradas = [];

// Llenar el array con valores aleatorios entre 1 y 6 (valores de los dados)
for ($i = 0; $i < $dados; $i++) {
    $tiradas[] = rand(1, 6);
}

// Imprimir los valores del array utilizando foreach
print "Tirada de $dados dados:\n";
foreach ($tiradas as $valor) {
    print $valor . "\n";
}
?>


