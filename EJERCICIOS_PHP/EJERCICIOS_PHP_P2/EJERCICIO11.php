<?php
// Generar un número aleatorio entre 1 y 10 para decidir cuántos dados tirar
$num_dados = rand(1, 10);

// Inicializar el contador de ocurrencias y el valor máximo
$maximo = 0;
$contador_maximo = 0;

// Tirar los dados y encontrar el valor máximo y cuántas veces se obtiene
for ($i = 1; $i <= $num_dados; $i++) {
    $dado = rand(1, 6); // Generar un valor aleatorio entre 1 y 6 para cada dado
    
    print "<p>RESULTADO DADO $i = $dado</p>";

    // Comprobar si el dado es el nuevo valor máximo
    if ($dado > $maximo) {
        $maximo = $dado;  // Actualizar el valor máximo
        $contador_maximo = 1; // Reiniciar el contador a 1, ya que es el primero de este valor
    } elseif ($dado == $maximo) {
        $contador_maximo++; // Incrementar el contador si el dado es igual al valor máximo
    }
}

// Mostrar el valor máximo y cuántas veces ha aparecido
print "<p>El valor máximo obtenido es: $maximo</p>";
print "<p>El valor máximo se ha obtenido $contador_maximo veces.</p>";
?>
