<?php
// Definir los días de la semana y los tipos de comida
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
$comidas = ["Desayuno", "Comida", "Cena"];

// Generar la tabla
echo "<table border='1' cellspacing='0' cellpadding='5' style='text-align: center;'>";

// Encabezados de la tabla
echo "<tr><th></th>";
foreach ($dias as $dia) {
    echo "<th>$dia</th>";
}
echo "</tr>";

// Filas con las comidas y celdas con valores personalizados
foreach ($comidas as $indexComida => $comida) {
    echo "<tr><th>$comida</th>";
    foreach ($dias as $indexDia => $dia) {
        $valor = strtolower($comida) . " " . ($indexDia + 1); // Generar el texto "desayuno 1", "comida 2", etc.
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
