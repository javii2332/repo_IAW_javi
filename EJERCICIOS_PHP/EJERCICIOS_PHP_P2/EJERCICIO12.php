<?php
$columnas = 10;
$filas    = 10;
$numero   = 1;

print "<table border=\"1\">\n";            // Abre la tabla
print "<caption>Tabla de 10x10</caption>\n"; // Crea la leyenda <caption>
print "<tbody>\n";                       // Abre el cuerpo de la tabla <tbody>

// Crear la tabla
for ($i = 1; $i <= $filas; $i++) {         // Bucle para las filas
    print "    <tr>\n";                     // Abre una nueva fila
    for ($j = 1; $j <= $columnas; $j++) {  // Bucle para las columnas
        print "      <td>$numero</td>\n";   // Imprime el número en la celda
        $numero++;                         // Incrementa el número
    }
    print "    </tr>\n";                    // Cierra la fila
}

print "  </tbody>\n";                      // Cierra el cuerpo de la tabla
print "</table>\n";                         // Cierra la tabla
?>
