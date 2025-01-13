<?php
// Crear array asociativo
$v = [];

// Claves del array
$claves = ['a', 'b', 'c', 'd'];

// Generar valores aleatorios y asociarlos a las claves
foreach ($claves as $clave) {
    $v[$clave] = rand(1, 100); // Generar un número aleatorio entre 1 y 100
}

// Imprimir el array asociativo
foreach ($v as $clave => $valor) {
    print "\$v[$clave]=$valor;\n";
}
?>
