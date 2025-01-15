<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formularios
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>SUSCRIPCIÓN A NEWSLETTER</h1>

  <form action="EJERCICIO9RECOGIDA.php" method="get">
    <p><label>Correo Electrónico: <input type="text" name="correo" size="40" maxlength="60" required></label></p>

    <p><label>Confirmar Correo Electrónico: <input type="text" name="correoconf" size="40" maxlength="60" required></label></p>

    <p><label>Quiere recibir correos?:</label></p>
    <select name="elegir" required>
        <option value="0">-</option>
        <option value="1">Si</option>
        <option value="2">No</option>
    </select>
    

    <p>
      <input type="submit" value="Enviar">
      <input type="reset">
    </p>
  </form>
</body>
</html>
