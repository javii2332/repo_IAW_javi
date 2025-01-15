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
  <h1>VALIDACION</h1>

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


//PROGRAMA PRINCIPAL

//PASO 1 RECOJO DATOS DEL FORMULARIO 

$correo=recoge('correo');
$correo2=recoge('correoconf');
$elegir=recoge('elegir');

// PASO 2: Validaciones
$errores = []; // Para acumular errores y mostrarlos al usuario

if ($correo === "") {
    $errores[] = "Por favor, introduzca un correo electrónico.";
}

if ($correo2 === "") {
    $errores[] = "Por favor, confirme su correo electrónico.";
}

if ($correo !== "" && !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico introducido no es válido.";
}

if ($correo2 !== "" && !filter_var($correo2, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico de confirmación no es válido.";
}

if ($correo !== "" && $correo2 !== "" && $correo !== $correo2) {
    $errores[] = "Los correos electrónicos introducidos no coinciden.";
}

// PASO 3: Mostrar resultados
if (empty($errores)) {
    echo "<p>Los correos electrónicos son válidos y coinciden: $correo</p>\n";
} else {
    foreach ($errores as $error) {
        echo "<p>$error</p>\n";
    }
}

?>
  <p><a href="plantilla1-forms.php">Volver al formulario.</a></p>
</body>
</html>
