<?php
$columnas = 10;
$filas    = 10;
$numero   = 1;

print "<table border=\"1\">\n";            // Abre la tabla
print "<caption>Tabla de 10x10</caption>\n"; // Crea la leyenda <caption>
print "<tbody>\n";                       // Abre el cuerpo de la tabla <tbody>

// Crear la tabla
for ($i = 1; $i <= $filas; $i++) {         // Bucle para las filas
     // Alternar colores de las filas
     $color_fila = ($i % 2 == 0) ? '#D3D3D3' : '#FFFFFF'; // Gris (#D3D3D3) y blanco (#FFFFFF)
     print "    <tr style=\"background-color: $color_fila;\">\n"; // Aplica estilo de color de fondo a la fila
     for ($j = 1; $j <= $columnas; $j++) { // Bucle para las columnas
         print "      <td style=\"padding: 5px; text-align: center;\">$numero</td>\n"; // Celdas con padding y texto centrado
         $numero++; // Incrementar el número
    }
    print "    </tr>\n";                    // Cierra la fila
}

print "  </tbody>\n";                      // Cierra el cuerpo de la tabla
print "</table>\n";                         // Cierra la tabla
?>
