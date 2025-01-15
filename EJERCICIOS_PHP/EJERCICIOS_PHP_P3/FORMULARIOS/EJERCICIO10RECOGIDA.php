<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formularios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>COMPROBACIÓN DE LOS DATOS INTRODUCIDOS</h1>

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

// PROGRAMA PRINCIPAL

// PASO 1: RECOJO DATOS DEL FORMULARIO
$nombre = recoge('nombre');
$apellidos = recoge('apellidos');
$edad = recoge('edad');
$peso = recoge('peso');
$sexo = recoge('sexo');
$estado = recoge('estado');
$aficiones = recoge('aficiones', []);

// PASO 2: VALIDACIONES
$nombreOk = $apellidosOk = $edadOk = $pesoOk = $sexoOk = $estadoOk = $aficionesOk = false;

if ($nombre == "") {
    print "<p>No has escrito tu nombre.</p>\n";
} else {
    $nombreOk = true;
}

if ($apellidos == "") {
    print "<p>No has escrito tus apellidos.</p>\n";
} else {
    $apellidosOk = true;
}

if ($edad == "") {
    print "<p>No has escrito tu edad.</p>\n";
} else {
    $edadOk = true;
}

if ($peso == "") {
    print "<p>No has indicado tu peso.</p>\n";
} elseif (!is_numeric($peso)) {
    print "<p>No has escrito tu peso como número.</p>\n";
} else {
    $pesoOk = true;
}

if ($sexo == "") {
    print "<p>Seleccione su sexo, por favor.</p>\n";
} else {
    $sexoOk = true;
}

if ($estado == "") {
    print "<p>Seleccione su estado, por favor.</p>\n";
} else {
    $estadoOk = true;
}

// Validación de aficiones
if (empty($aficiones)) {
    print "<p>No has seleccionado ninguna afición.</p>\n";
} else {
    $aficionesOk = true;
}

// PASO 3: Mostrar resultados si todo está OK
if ($nombreOk && $apellidosOk && $edadOk && $pesoOk && $sexoOk && $estadoOk && $aficionesOk) {
    echo "<h2>Información Recogida:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Edad:</strong> $edad años</p>";
    echo "<p><strong>Peso:</strong> $peso kg</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Estado:</strong> $estado</p>";
    echo "<p><strong>Aficiones:</strong> " . implode(", ", $aficiones) . "</p>";
}

?>
  <p><a href="plantilla1-forms.php">Volver al formulario.</a></p>
</body>
</html>
