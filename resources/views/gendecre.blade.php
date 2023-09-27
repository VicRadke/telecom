<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Generador de credenciales</title>
</head>
<body>
  <h1>Generador de credenciales</h1>
  <form action="generar.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="rol">Rol:</label>
    <input type="text" name="rol" id="rol" required>
    <br>
    <input type="submit" value="Generar credenciales">
  </form>
</body>
</html>