@extends('layouts.app')
@section('content')       
           

<head>
    <meta name="viewport" content="device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/estilo-fechasyhoras.css">
    <link rel="stylesheet" href="css/estilo-index.css">
</head>

<div class="contenedor">
  <h1 class="text-green font-weight-bold text-uppercase">FECHAS Y HORAS</h1>

  <div class="contendor-accesos-directos">
            <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
            </svg>
            <p>Registrar</p>
            </div></div>
            <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
            </svg>
            <p>Eliminar</p>
            </div></div>
            
                <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                <<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                  <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
              </svg>
              <p>Consultar horas</p>
            </div></div>

            <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-filter-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M7 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
            </svg>
            <p>Consultar horas y faltas</p>
          </div></div>
        </div>

       <h1 class="text-green font-weight-bold text-uppercase">Reporte de faltas</h1>

        <div class='box'>

            <div class="form-container">
                <h6 class="text-black font-weight-bold ">Introduce fecha o rango de fechas</h6>
                <form class="form">
                    <div class="column">
                        <label>Desde:</label>
                        <div class="input">
                            <input required="" placeholder="Desde:" type="date">
                        </div>
                        <label>Hasta:</label>
                        <div class="input">
                            <input required="" placeholder="Hasta:" type="date">
                        </div>

                    </div>
                    <button class="form-btn">ACEPTAR</button>
                </form>
            </div>

        </div>


        <h1 class="text-green font-weight-bold text-uppercase">Buscar Prestador</h1>
        <div class='box'>
            <div class="form-container">
                <form class="form">

                    <div class="input-box address">
                        <label>Criterio de Busqueda:</label>
                        <div class="column">
                            <div>
                                <select class="input">
                                    <option>Nombre</option>
                                    <option>Apellido</option>
                                    <option>Curp</option>
                                           
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form class="form">
                            <div>
                                <label> Nombre (s)</label>
                                <input class="input" required="" placeholder="Escribe el nombre completo" type="text">
                            </div>
                        </form>
                    </div>

            </div>
        </div>
        
</body>

</html>
<script src="js/fecha.js"></script>



@endsection