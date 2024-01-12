@extends('layouts.app')
@section('content')
    <!-- contenedor de los elementos -->
    <div class="contenedor">
        <h1 class="text-green font-weight-bold text-uppercase">Generacion de credencial</h1>
    </div>

    <div>
        
        <style>
            input {
              padding: 8px;
              margin-bottom: 16px;
              box-sizing: border-box;
            }
            button {
              background-color: #4CAF50;
              color: white;
              padding: 20px;
              border: none;
              border-radius: 8px;
              cursor: pointer;
              font-size: 16px;
            }
          </style>
        </head>
        <body>
        
          <label for="nombrePrestador">Nombre del Prestador:</label>
          <input type="text" id="nombrePrestador" required>
        
          <button onclick="generarCredencial()"><a href="{{route('imprimir')}}">Generar credencial</a></button>

          
        
          <script>
            function generarCredencial() {
              var nombrePrestador = document.getElementById('nombrePrestador').value;
        
              // Aquí puedes agregar lógica para generar la credencial con el nombre del prestador
              alert('Credencial generada para ' + nombrePrestador);
            }
          </script>
        
        </body>
    </div>

    <!-- aqui podrias poner el footer         -->
    <div>.</div>
    <script src="js/fecha.js"></script>
@endsection
