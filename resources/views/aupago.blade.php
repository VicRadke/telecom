@extends('layouts.app')
@section('content')  
<!DOCTYPE html>

        <div class="page-content pt-3 px-5" id="content">           
            <!-- contenedor de los elementos -->                
            <div class="contenedor">     
            <h1 class="text-green font-weight-bold text-uppercase">Autorizacion de pago</h1>
            </div>  
            <style>
               
                table {
                  width: 80%;
                  margin: 20px auto;
                  border-collapse: collapse;
                }
                th, td {
                  border: 1px solid #ddd;
                  padding: 8px;
                  text-align: left;
                }
                th {
                  background-color: #4CAF50;
                  color: white;
                }
                input[type="checkbox"] {
                  margin-left: 10px;
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
            
              <h2>Lista de Prestadores</h2>
            
              <form id="autorizacionPagoForm">
                <table>
                  <thead>
                    <tr>
                      <th>Nombre del Prestador</th>
                      <th>Horas Trabajadas</th>
                      <th>Verificar Pago</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Prestador 1</td>
                      <td>40</td>
                      <td><input type="checkbox" name="verificarPago[]" value="Prestador1"></td>
                    </tr>
                    <tr>
                      <td>Prestador 2</td>
                      <td>35</td>
                      <td><input type="checkbox" name="verificarPago[]" value="Prestador2"></td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                  </tbody>
                </table>
            
                <button type="submit">Enviar Autorización de Pago</button>
              </form>
            
            </body>

            <!-- aqui podrias poner el footer         -->
            <div>piee</div>
        </div>
    </body>
</html>
<script src="js/fecha.js"></script>
@endsection