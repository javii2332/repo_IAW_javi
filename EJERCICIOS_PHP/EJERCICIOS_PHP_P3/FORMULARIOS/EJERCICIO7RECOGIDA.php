<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formularios
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>TABLA DE JAVIER LLUESMA</h1>

<?php

// Función de recogida de datos

function recoge($key, $type = "")
{
    if (!is_string($key) && !is_int($key) || $key == "") {
        trigger_error("Function recoge(): Argument #1 (\$key) must be a non-empty string or an integer", E_USER_ERROR);
    } elseif ($type !== "" && $type !== []) {
        trigger_error("Function recoge(): Argument #2 (\$type) is optional, but if provided, it must be an empty array or an empty string", E_USER_ERROR);
    }
    $tmp = $type;
    if (isset($_REQUEST[$key])) {
        if (!is_array($_REQUEST[$key]) && !is_array($type)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$key]));
        } elseif (is_array($_REQUEST[$key]) && is_array($type)) {
            $tmp = $_REQUEST[$key];
            array_walk_recursive($tmp, function (&$value) {
                $value = trim(htmlspecialchars($value));
            });
        }
    }
    return $tmp;
}

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


//PROGRAMA PRINCIPAL

//PASO 1 RECOJO DATOS DEL FORMULARIO 

$filas=recoge('filas');
$filas = (int)$filas;
$cols=recoge('cols');
$cols = (int)$cols;

//PASO 2
// Hacer las comprobaciones oportunas de los valores y mostrar avisos si los
// valores son vacíos, si no son del tipo correcto, si no están en rango, etc.

$filasOk = false;
$colsOk = false;

if ($filas == ""){
    print "<p>No has escrito el numero de filas.</p>\n";
} elseif (!is_numeric($filas)) {
    print "<p>No has escrito las filas como número.</p>\n";
} elseif ( $filas < 1){
    print "<p>Las filas no estan en el rango mayor o igual a 1</p>";
} else {
    $filasOk =true;
}

if ($cols == ""){
    print "<p>No has escrito el numero de columnas.</p>\n";
} elseif (!is_numeric($cols)) {
    print "<p>No has escrito las columnas como número.</p>\n";
} elseif ( $cols < 1){
    print "<p>Las columnas no estan en el rango mayor o igual a 1</p>";
} else {
    $colsOk =true;
}


//PASO3
// Si todos los valores recogidos del formulario están OK, 
// realizar las accionas que se pida en el ejercicio

//LLAMADA A LA FUNCIÓN
echo creaTabla($filas, $cols);

?>
  <p><a href="plantilla1-forms.php">Volver al formulario.</a></p>
</body>
</html>
