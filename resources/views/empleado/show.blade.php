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
                <td>{{ $datosPadre->nombre_referencia_personal ?? 'NA' }}</td>
                <td>{{ $datosPadre->direccion_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosPadre->telefono_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosMadre->nombre_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosMadre->direccion_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosMadre->telefono_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosConyuge->nombre_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosConyuge->direccion_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosConyuge->telefono_referencia_personal ?? 'NA'}}</td>
            </tr>
        </tbody>
    </table>
    {{-- <table class="styled-table">
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
    </table> --}}

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
                <td>{{ $datosConyuge->nombre_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosContactoEmergencia->nombre_referencia_personal ?? 'NA' }}</td>
                <td>{{ $datosContactoEmergencia->direccion_referencia_personal ?? 'NA'}}</td>
                <td>{{ $datosContactoEmergencia->telefono_referencia_personal ?? 'NA'}}</td>
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
                <td>{{ $informacionAcademica->nivelAcademico->name ?? 'NA' }}</td>
                <td>{{ $informacionAcademica->nombre_institucion ?? 'NA'}}</td>
                <td>{{ $informacionAcademica->carrera ?? 'NA'}}</td>
                <td>{{ $informacionAcademica->periodo_escolar ?? 'NA'}}</td>
            </tr>
        </tbody>
    </table>

    <table class="styled-table">
        <thead>
            <tr>
                @foreach ($referenciasExtra as $referenciaExtra)
                    <th>Nombre Referencia {{ $loop->iteration }}</th>
                    <th>Direccion referencia {{ $loop->iteration }}</th>
                    <th>Telefono referencia {{ $loop->iteration }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($referenciasExtra as $referenciaExtra)
                    <td>{{ $referenciaExtra->nombre_referencia_personal ?? 'NA'}}</td>
                    <td>{{ $referenciaExtra->direccion_referencia_personal ?? 'NA'}}</td>
                    <td>{{ $referenciaExtra->telefono_referencia_personal ?? 'NA'}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
    
    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
