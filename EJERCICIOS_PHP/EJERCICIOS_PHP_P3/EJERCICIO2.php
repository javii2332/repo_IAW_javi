<?php

function creaTabla(int $filas, int $cols): string 
{
    $tabla = "<table border=\"1\">\n";            // Abre la tabla
    $tabla .= "  <caption>Tabla</caption>\n";      // Crea la leyenda <caption>
    $tabla .= "  <tbody>\n";                       // Abre el cuerpo de tabla <tbody>
    
    $tabla .= "    <tr>\n";                        // Abre la primera fila
    $tabla .= "      <th></th>\n";                 // Crea la primera celda <th> de la primera fila (sin número)
    for ($j = 1; $j <= $cols; $j++) {      // Bucle 1 se ejecuta tantas veces como columnas tenga la tabla
        $tabla .= "      <th>$j</th>\n";           // Crea las celdas <th> de la primera fila (con número)
    }
    $tabla .= "    </tr>\n";                       // Cierra la primera fila
    
    for ($i = 1; $i <= $filas; $i++) {         // Bucle 2 (genera el resto de filas de la tabla)
        $tabla .= "    <tr>\n";                    // Abre la fila
        $tabla .= "      <th>$i</th>\n";           // Crea la primera celda <th> de cada fila (con número)
        for ($j = 1; $j <= $cols; $j++) {  // Bucle 3 se ejecuta tantas veces como columnas tenga la tabla
            $tabla .= "      <td>$i-$j</td>\n";     // Crea el resto de celdas <td> de cada fila (con números)
        }
        $tabla .= "    </tr>\n";                   // Cierra la fila
    }
    
    $tabla .= "  </tbody>\n";                      // Cierra el cuerpo de tabla <tbody>
    $tabla .= "</table>\n";                        // Cierra la tabla 

    return $tabla;

}

$filas = rand(2,10);
$cols = rand(2,10);


//LLAMADA A LA FUNCIÓN
echo creaTabla($filas, $cols);

?>
