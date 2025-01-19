<?php

//accedemos a la sesion 
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
  <h1>Formulario Texto 1  (Formulario)</h1>

<?php
// Si hay un mensaje de error, se muestra
if (isset($_SESSION["error"])) {
    echo "<p class='aviso'>".$_SESSION["error"]."</p>";
    unset($_SESSION["error"]); // Borra el error para que no se muestre en el siguiente intento
}

// Si hay un texto correcto guardado, se muestra
if (isset($_SESSION["texto"]) && isset($_SESSION["texto2"])) {
    print "<p>El texto correcto 1 es: <strong>".$_SESSION["texto"]."</strong>.</p>\n";
    print "<p>El texto correcto 2 es: <strong>".$_SESSION["texto2"]."</strong>.</p>\n";
}

// Si hay un texto incorrecto ingresado, se muestra
if (isset($_SESSION["txt_inc"])) {
    print "<p>El texto ingresado es: <strong>".$_SESSION["txt_inc"]."</strong>.</p>\n";
}

// Si hay un texto incorrecto ingresado, se muestra
if (isset($_SESSION["txt_inc2"])) {
    print "<p>El texto ingresado es: <strong>".$_SESSION["txt_inc2"]."</strong>.</p>\n";
}

?>

  <form action="EJ4REC.php" method="get">
    <p><label>Campo 1: <input type="text" name="texto" size="20" maxlength="20"></label></p>
    <p><label>Campo 2: <input type="text" name="texto2" size="20" maxlength="20"></label></p>

      <input type="submit" value="Enviar">
      <input type="reset">
    </p>
  </form>
</body>
</html>
