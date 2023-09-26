<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Generador de oficios</title>
</head>
<body>
  <h1>Formulario de reporte</h1>
  <form action="reporte.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="periodo">Periodo:</label>
    <input type="date" name="periodo" id="periodo" required>
    <br>
    <input type="submit" value="Generar reporte">
  </form>
</body>
</html>