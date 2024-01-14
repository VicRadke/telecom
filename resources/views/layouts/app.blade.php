<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/estilo-index.css">
        <link rel="stylesheet" href="/css/estilo-formulario.css">
        <link rel="stylesheet" href="/css/estilo.css">
        <link rel="stylesheet" href="/css/estilo-catalogo.css">
        {{-- <link rel="stylesheet" href="/css/estilo-formulario-reporte.css"> --}}


        <title>°°°Servicio Social°°°</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- manda a llamar a las barras de menu y a la del encabezado -->
        <x-barra/>
        <!-- este es el padre de los div -->
        <div class="page-content pt-3 px-5" id="content">           
            @if(session('success'))
                <div class="bg-green-400 text-center text-black font-bold py-2 px-4 rounded">
                    {{session('success')}}
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-400 text-center text-black font-bold py-2 px-4 rounded">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
<script src="/js/fecha.js"></script>
