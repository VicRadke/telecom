<!DOCTYPE html>
<html lang="es">
<head>
  <title>Generar reportes</title>
</head>
<body>
  <h1>Generar reportes</h1>
  <form action="generar_reporte.php" method="post">
    <label for="tipo_reporte">Tipo de reporte:</label>
    <select name="tipo_reporte" id="tipo_reporte">
      <option value="general">Reporte general</option>
      <option value="alfabetico">Reporte alfabético</option>
      <option value="faltas">Reporte de faltas</option>
    </select>
    <input type="submit" value="Generar reporte">
  </form>
  <?php
    if (isset($_POST["tipo_reporte"])) {
      $tipo_reporte = $_POST["tipo_reporte"];
      // Generar el reporte
      switch ($tipo_reporte) {
        case "general":
          echo generar_reporte_general();
          break;
        case "alfabetico":
          echo generar_reporte_alfabetico();
          break;
        case "faltas":
          echo generar_reporte_faltas();
          break;
      }
    }
  ?>
</body>
</html>
