@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees />

    <form action="{{ route('empleado.do.search') }}" method="POST" class="form-inline">
        @csrf
        <label for="id_prestador">Búsqueda por número de prestador</label>
        <input type="text" name="id_prestador" id="id_prestador" placeholder="Buscar...">

        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <table>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Ver info
            </th>
            <th>
                Editar
            </th>
            <th>
                Eliminar
            </th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>
                    {{ $employee->full_name }}
                </td>
                <td>
                    <a href="{{ route('empleado.show', $employee->id_prestador) }}" class="btn btn-primary">Ver</a>
                </td>
                <td>
                    <a href="{{ route('empleado.edit', $employee->id_prestador) }}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('empleado.destroy', $employee->id_prestador) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="mt-2 mb-3">
        {{ $employees->links() }}
    </div>
@endsection
