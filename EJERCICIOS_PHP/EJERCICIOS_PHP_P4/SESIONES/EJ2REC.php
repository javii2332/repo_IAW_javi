<?php
//ACCEDEMOS A LA SESIÓN 
session_name("sesiones-1-01");
session_start();

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
  <h1>FORMULARIO TXT 1 (Resultado)</h1>

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

$texto=recoge("texto");

#COMPROBAMOS EL TEXTO Y ESCRIBIMOS AVISOS SI HAY ERRORES
if ($texto == "") {
    print "<p class=\"aviso\">No ha escrito su nombre.</p>\n";
} else {
    //SI EL TEXTO ES VÁLIDO, GUARDAMOS EL TEXTO EN LA SESIÓN...
    $_SESSION["texto"] = $texto;
    header("Location:EJ2FORM.php");
}
?>

  <p><a href="EJ2FORM.php">Volver al formulario.</a></p>
</body>
</html>
