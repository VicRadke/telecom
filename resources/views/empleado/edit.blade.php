@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees />
    <h1>
        Editar prestador #{{ $empleado->id_prestador }}
    </h1>
    <x-form-editar-empleado :empleado="$empleado" />
    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
