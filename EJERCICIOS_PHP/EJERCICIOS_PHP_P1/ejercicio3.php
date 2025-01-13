<?php
// Generamos un peso entre 50 y 100 kilos
$peso = rand(50, 100);

// Generamos una altura entre 1.50 y 2.00 metros con decimales
$altura = rand(150, 200) / 100;

// Calculamos el IMC
$imc = $peso / ($altura ** 2);

// Mostramos los resultados redondeando el IMC a un decimal
echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . round($imc, 1);
?>
