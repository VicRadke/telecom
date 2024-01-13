@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees/>
    <h1>
        Consulta del prestador #{{ $empleado->id_prestador }}
    </h1>

    <table class="table table-striped table-hover border-solid table-fixed">
        <thead>
            <tr class="text-green">
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Matricula</th>
                <th>Tipo identificación</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido_paterno }}</td>
                <td>{{ $empleado->apellido_materno }}</td>
                <td>{{ $empleado->id_prestador }}</td>
                <td>{{ $empleado->tipo_identificacion }}</td>
                <td>{{ $empleado->genero }}</td>
                <td>{{ $empleado->spanish_birth_date}}</td>
            </tr>
        </tbody>
    </table>

@endsection
