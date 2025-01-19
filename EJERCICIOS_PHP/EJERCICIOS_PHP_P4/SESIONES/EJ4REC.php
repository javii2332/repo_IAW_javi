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
$texto2=recoge("texto2");

$texto = recoge("texto");
$texto2 = recoge("texto2");

// Inicializa el mensaje de error
$_SESSION["error"] = "";
$_SESSION["txt_inc"] = $texto;
$_SESSION["txt_inc2"] = $texto2;

// Verifica si alguno de los campos está vacío
if ($texto == "" || $texto2 == "") {
    $_SESSION["error"] = "DEBE INTRODUCIR UNA PALABRA EN LOS DOS CAMPOS.";
}
// Verifica si el primer campo tiene más de una palabra
elseif (strpos($texto, ' ') !== false) {
    $_SESSION["error"] = "EL PRIMER CAMPO DEBE CONTENER UNA SOLA PALABRA.";
}
// Verifica si el segundo campo tiene más de una palabra
elseif (strpos($texto2, ' ') !== false) {
    $_SESSION["error"] = "EL SEGUNDO CAMPO DEBE CONTENER UNA SOLA PALABRA.";
}
// Verifica si el primer campo no está en mayúsculas o el segundo no está en minúsculas
elseif (strtoupper($texto) !== $texto || strtolower($texto2) !== $texto2) {
    $_SESSION["error"] = "LA PRIMERA PALABRA DEBE ESTAR EN MAYÚSCULA Y LA SEGUNDA EN MINÚSCULA.";
}
// Si todo está bien
else {
    $_SESSION["texto"] = $texto;
    $_SESSION["texto2"] = $texto2;
    unset($_SESSION["error"], $_SESSION["txt_inc"], $_SESSION["txt_inc2"]);
    header("Location:EJ4FORM.php");
    exit;
}

// En caso de error, redirige al formulario
header("Location:EJ4FORM.php");
exit;

?>

  <p><a href="EJ4FORM.php">Volver al formulario.</a></p>
</body>
</html>
