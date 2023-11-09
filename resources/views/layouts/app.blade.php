<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/estilo-index.css">
        <title>°°°Servicio Social°°°</title>
    </head>
    <body>
        <!-- manda a llamar a las barras de menu y a la del encabezado -->
        <x-barra/>
            <!-- este es el padre de los div -->
        <div class="page-content pt-3 px-5" id="content">           
            @yield('content')
        </div>
    </body>
</html>
<script src="js/fecha.js"></script>

 