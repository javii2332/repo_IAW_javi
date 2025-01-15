<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formulario para calcular la letra del DNI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Formulario para calcular la letra del DNI</h1>

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

// Función para calcular la letra del NIF
function calculaLetraNIF(int $num): string {
    // El índice de la letra se calcula como el resto de dividir el número entre 23
    $calcular = $num % 23;

    // Array con las 23 letras correspondientes
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    // Retorna la letra correspondiente al número calculado
    return $letras[$calcular];
}

// PROGRAMA PRINCIPAL

// Paso 1: Recogemos los datos del formulario
$num = recoge('num');

// Paso 2: Hacer las comprobaciones oportunas de los valores
$numOk = false;

// Comprobación de que el número no está vacío y es un número válido
if ($num == "") {
    echo "<p>No has escrito ningún número.</p>\n";
} elseif (!is_numeric($num)) {
    echo "<p>NO ES UN NÚMERO ENTERO POSITIVO.</p>\n";
} elseif ($num < 1 || $num > 99999999) {
    echo "<p>Tu número de DNI no está en el rango entre 1 y 99999999.</p>";
} else {
    $numOk = true;
}

// Paso 3: Si el número es válido, calculamos la letra del DNI y mostramos el resultado
if ($numOk) {
    // Calculamos la letra correspondiente
    $letra = calculaLetraNIF($num);

    // Mostramos el número de DNI con la letra
    echo "<p>El número de DNI es: " . str_pad($num, 8, "0", STR_PAD_LEFT) . $letra . "</p>\n";
}
?>

<p><a href="plantilla1-forms.php">Volver al formulario.</a></p>
</body>
</html>
