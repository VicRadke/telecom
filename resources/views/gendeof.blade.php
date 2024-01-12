@extends('layouts.app')
@section('content')

        <!-- este es el padre de los div -->
        <div class="page-content pt-3 px-5" id="content">           
            <!-- contenedor de los elementos -->                
         {{-- <div class="contenedor">      --}}
            <h1 class="text-green font-weight-bold text-uppercase">Generacion de oficios</h1>
            </div>  
            <div class="contendor-accesos-directos">
                <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
  <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>   
                    <p>Oficio de Aceptación</p>
                </div></div>
                <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-break" viewBox="0 0 16 16">
  <path d="M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1z"/>
</svg>
                    <p>Oficio de Término</p>
                </div></div>
                
                    <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
  <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>
                    <p>Oficio de Baja</p>
                </div></div>
            </div>

            

            <!-- aqui podrias poner el footer         -->
            <div></div>
        </div>
    </body>
</html>
<script src="js/fecha.js"></script>
@endsection