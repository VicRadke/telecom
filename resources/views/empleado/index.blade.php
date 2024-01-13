@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees/>

    <x-formulario-solicitud-servicio-social />
@endsection
