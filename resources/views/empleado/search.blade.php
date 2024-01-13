@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees/>

    <form action="#">
        <label for="id_prestador">Búsqueda por número de prestador</label>
        <input type="text" name="id_prestador" id="id_prestador" placeholder="Buscar...">
    </form>
@endsection
