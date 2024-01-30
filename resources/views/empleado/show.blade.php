@extends('layouts.app')
@section('content')
    <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees />
    <h1>
        Consulta del prestador #{{ $empleado->id_prestador }}
    </h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Matricula</th>
                <th>Tipo Identificación</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento</th>
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
                <td>{{ $empleado->spanish_birth_date }}</td>
            </tr>
        </tbody>
    </table>


    <table class="styled-table">
        <thead>
            <tr>
                <th>Calle</th>
                <th>Numero Exterior</th>
                <th>Número Interior</th>
                <th>Colonia</th>
                <th>Código Postal</th>
                <th>Entidad Federativa</th>
                <th>Alcaldía/Municipio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $domicilio->calle ?? 'NA' }}</td>
                <td>{{ $domicilio->numero_exterior ?? ''}}</td>
                <td>{{ $domicilio->numero_interior ?? ''}}</td>
                <td>{{ $domicilio->colonia ?? ''}}</td>
                <td>{{ $domicilio->codigo_postal ?? ''}}</td>
                <td>{{ $domicilio->entidad_federativa ?? ''}}</td>
                <td>{{ $domicilio->alcaldia_municipio ?? ''}}</td>
            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Modalidad</th>
                {{-- <th>Migrante</th>
                <th>Afrodescendencia</th> --}}
                {{-- <th>Lengua indigena</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $solicitud->modalidad->name ?? 'NA' }}</td>
                {{-- <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->colonia}}</td> --}}
            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Telefono Fijo</th>
                <th>Telefono Celular</th>
                <th>Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->celular}}</td>
                <td>{{ $empleado->correo}}</td>

            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre del padre</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Nombre de la madre</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Conyuge</th>
                <th>Domicilio</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->calle }}</td>
                <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->colonia}}</td>
                <td>{{ $empleado->codigo_postal}}</td>
                <td>{{ $empleado->entidad_federativa}}</td>
                <td>{{ $empleado->alcaldia_municipio}}</td>
                <td>{{ $empleado->entidad_federativa}}</td>
                <td>{{ $empleado->alcaldia_municipio}}</td>
            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Modalidad</th>
                <th>Migrante</th>
                <th>Afrodescendencia</th>
                <th>Lengua indigena</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->calle }}</td>
                <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->colonia}}</td>
            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre contacto emergencia</th>
                <th>Telefono fijo emergencia</th>
                <th>Telefono movil emergencia</th>
                <th>Telefono oficina o extension emergencia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->calle }}</td>
                <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->numero_interior}}</td>

            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nivel academico</th>
                <th>Institucion</th>
                <th>Carrera</th>
                <th>Periodo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->calle }}</td>
                <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->numero_interior}}</td>

            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre Referencia 1</th>
                <th>Direccion referencia 1</th>
                <th>Telefono referencia 1</th>
                <th>Nombre Referencia 2</th>
                <th>Direccion referencia 2</th>
                <th>Telefono referencia 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $empleado->calle }}</td>
                <td>{{ $empleado->numero_exterior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->numero_interior}}</td>
                <td>{{ $empleado->numero_interior}}</td>

            </tr>
        </tbody>
    </table>
    
    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
