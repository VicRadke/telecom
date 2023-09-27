<!DOCTYPE html>
<html lang="es">
<head>
  <title>Revisar horas de empleado</title>
</head>
<body>
  <h1>Revisar horas de empleado</h1>
  <form action="revisar_horas.php" method="post">
    <label for="nombre_empleado">Nombre del empleado:</label>
    <input type="text" id="nombre_empleado" name="nombre_empleado">
    <input type="submit" value="Enviar">
  </form>
  <?php
    if (isset($_POST["nombre_empleado"])) {
      $nombre_empleado = $_POST["nombre_empleado"];
      // Conectarse a la base de datos
      $conexion = new PDO("mysql:host=localhost;dbname=empresa", "root", "");
      // Consultar las horas trabajadas del empleado
      $consulta = "SELECT fecha, hora_entrada, hora_salida FROM horas_trabajadas WHERE nombre_empleado = :nombre_empleado";
      $sentencia = $conexion->prepare($consulta);
      $sentencia->bindParam(":nombre_empleado", $nombre_empleado);
      $sentencia->execute();
      // Mostrar las horas trabajadas en una tabla
      echo "<table>";
      echo "<tr><th>Fecha</th><th>Hora de entrada</th><th>Hora de salida</th></tr>";
      foreach ($sentencia->fetchAll() as $horas) {
        echo "<tr><td>{$horas["fecha"]}</td><td>{$horas["hora_entrada"]}</td><td>{$horas["hora_salida"]}</td></tr>";
      }
      echo "</table>";
    }
  ?>
</body>
</html>
