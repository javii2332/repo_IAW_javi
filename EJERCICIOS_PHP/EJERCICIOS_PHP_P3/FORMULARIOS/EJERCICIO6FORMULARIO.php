<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formularios
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>ACCESO RESTRINGIDO, PORFAVOR INTRODUZCA SUS DATOS!</h1>

  <form action="EJERCICIO6RECOGIDA.php" method="get">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>

    <p><label>Edad: <input type="number" name="edad" min="5" max="130"></label></p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset">
    </p>
  </form>
</body>
</html>
