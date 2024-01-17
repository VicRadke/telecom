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
    <script>
        {{-- <button type="submit">Eliminar</button> --}}
            <
            input
        type = "button"
        value = "Eliminar"
        onclick = "if(confirm('¿Confirma eliminar?')){
        document.getElementById('eliminar-curso').submit()
        };
        "  / >
    </script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            color: #1e7e34;
            font-weight: bold;
            text-align: center;
        }

        .admin-buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .prestador-title {
            color: #1e7e34;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .styled-table th,
        .styled-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .styled-table th {
            background-color: #1e7e34;
            color: #fff;
        }



        form {
            display: inline;
            /* Para que el formulario y el botón estén en línea */
        }

        button {
            background-color: #dc3545;
            /* Color de fondo rojo (puedes cambiarlo) */
            color: #6b4848;
            /* Color del texto cafe*/
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Agrega una transición al color de fondo */
        }

        button:hover {
            background-color: #c82333;
            /* Cambia el color de fondo al pasar el mouse sobre el botón */
        }
    </style>
    <!-- manda a llamar a las barras de menu y a la del encabezado -->
    <x-barra />
    <!-- este es el padre de los div -->
    <div class="page-content pt-3 px-5" id="content">
        @if (session('success'))
            <div class="bg-green-400 text-center text-black font-bold py-2 px-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-400 text-center text-black font-bold py-2 px-4 rounded">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
<script src="/js/fecha.js"></script>
