@extends('layouts.app')
@section('content')
    <!-- contenedor de los elementos -->
    <div class="contenedor">
        <h1 class="text-green font-weight-bold text-uppercase">Generacion de credencial</h1>
    </div>

    <div>
        <a href="{{route('imprimir')}}">Generar credencial</a>
    </div>

    <!-- aqui podrias poner el footer         -->
    <div>.</div>
    <script src="js/fecha.js"></script>
@endsection
