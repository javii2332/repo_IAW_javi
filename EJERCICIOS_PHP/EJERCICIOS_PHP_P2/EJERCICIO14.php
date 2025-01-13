<?php
$filas = 4; // Número de filas (bases)
$columnas = 4; // Número de columnas (potencias)

print "<table border=\"1\" style=\"border-collapse: collapse; text-align: center;\">\n"; // Abre la tabla con bordes colapsados
print "<caption>Tabla de potencias</caption>\n"; // Crea la leyenda <caption>
print "<thead>\n<tr>\n"; // Abre el encabezado de la tabla
print "  <th>Base\\Potencia</th>\n"; // Primera celda vacía para los encabezados de columna

// Encabezados de las columnas
for ($col = 1; $col <= $columnas; $col++) {
    print "  <th>Potencia $col</th>\n";
}
print "</tr>\n</thead>\n"; // Cierra el encabezado

print "<tbody>\n"; // Abre el cuerpo de la tabla
for ($base = 1; $base <= $filas; $base++) { // Filas correspondientes a las bases
    print "  <tr>\n"; // Abre una nueva fila
    print "    <th>Base $base</th>\n"; // Celda que indica la base
    for ($exp = 1; $exp <= $columnas; $exp++) { // Columnas correspondientes a las potencias
        $resultado = pow($base, $exp); // Calcula la potencia
        print "    <td>$resultado</td>\n"; // Muestra el resultado
    }
    print "  </tr>\n"; // Cierra la fila
}
print "</tbody>\n"; // Cierra el cuerpo de la tabla
print "</table>\n"; // Cierra la tabla
?>
