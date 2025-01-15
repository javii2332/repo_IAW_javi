<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formularios
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>FORMULARIO DE DEFUNCIÓN</h1>

  <form action="EJERCICIO10RECOGIDA.php" method="get">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20" required></label></p>

    <p><label>Apellidos: <input type="text" name="apellidos" size="30" maxlength="20" required></label></p>

    <p><label>Porfavor indique su edad:</label></p>
    <select name="edad" required>
        <option>Menos de 20 años</option>
        <option>Entre 20 y 39 años</option>
        <option>Entre 40 y 59</option>
        <option>60 o más</option>
    </select>

    <p><label>Peso: <input type="number" name="peso" size="30" maxlength="20" required></label></p>

    <p><label>Seleccione su Sexo: 
        <input type="radio" name="sexo" value="Hombre" required> Hombre
        <input type="radio" name="sexo" value="Mujer" required> Mujer
        <input type="radio" name="sexo" value="Otros" required> Otros
    </label></p>

    <p><label>Seleccione su Estado Civil: 
        <input type="radio" name="estado" value="Soltero" required> Soltero
        <input type="radio" name="estado" value="Casado" required> Casado
        <input type="radio" name="estado" value="Divorciado" required> Divorciado
        <input type="radio" name="estado" value="Comprometido" required> Comprometido
    </label></p>

    <p><label>Seleccione sus aficiones:
        <input type="checkbox" name="aficiones[]" value="deportes"> Deportes
        <input type="checkbox" name="aficiones[]" value="videojuegos"> Videojuegos
        <input type="checkbox" name="aficiones[]" value="cine"> Cine
        <input type="checkbox" name="aficiones[]" value="ciencia"> Ciencia
        <input type="checkbox" name="aficiones[]" value="historia"> Historia
        <input type="checkbox" name="aficiones[]" value="arte"> Arte
        <input type="checkbox" name="aficiones[]" value="musica"> Musica
        <input type="checkbox" name="aficiones[]" value="senderismo"> Senderismo
        <input type="checkbox" name="aficiones[]" value="turismo"> Turismo
        <input type="checkbox" name="aficiones[]" value="paracaidismo"> Paracaidismo
        <input type="checkbox" name="aficiones[]" value="baile"> Baile
        <input type="checkbox" name="aficiones[]" value="karaoke"> Karaoke
    </label></p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset">
    </p>
  </form>
</body>
</html>
