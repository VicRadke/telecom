@extends('layouts.app')
@section('content')       
            <!-- contenedor de los elementos -->                
            <div class="contenedor">     
            <h1 class="text-green font-weight-bold text-uppercase">Fechas y horas</h1>
            </div>  
            <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captura de Horas Quincenales</title>
  <style>
    
    form {
      max-width: 400px;
      margin: 20px auto;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <form id="capturaHorasForm">
    <label for="nombrePrestador">Nombre del Prestador:</label>
    <input type="text" id="nombrePrestador" name="nombrePrestador" required>

    <label for="horasSemana1">Horas semana 1:</label>
    <input type="number" id="horasSemana1" name="horasSemana1" min="0" required>

    <label for="horasSemana2">Horas semana 2:</label>
    <input type="number" id="horasSemana2" name="horasSemana2" min="0" required>

    <button type="button" onclick="capturarHoras()">Capturar Horas</button>
  </form>

  <script>
    function capturarHoras() {
      var nombrePrestador = document.getElementById('nombrePrestador').value;
      var horasSemana1 = document.getElementById('horasSemana1').value;
      var horasSemana2 = document.getElementById('horasSemana2').value;

      // Aquí puedes realizar acciones con los datos capturados, como enviarlos a un servidor o mostrarlos en la página.
      console.log('Nombre del Prestador:', nombrePrestador);
      console.log('Horas semana 1:', horasSemana1);
      console.log('Horas semana 2:', horasSemana2);

      // Puedes agregar aquí la lógica adicional que necesites.
    }
  </script>

</body>
</html>


            <!-- aqui podrias poner el footer         -->
            <div></div>
@endsection