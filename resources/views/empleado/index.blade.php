<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mostrar lista empleados
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-light">
                    
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nombre </th>
                                <th>Apellido Paterno </th>
                                <th>Apellido Materno </th>
                                <th>Numero Tel </th>

                                <th>Acciones </th>

                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ( $empleados as $empleado ):
                                <tr>
                                    <td>{{ $empleado ->id }}</td>
                                    <td>{{ $empleado ->foto }}</td>
                                    <td>{{ $empleado ->Nombre }}</td>
                                    <td>{{ $empleado ->ApellidoPaterno }}</td>
                                    <td>{{ $empleado ->ApellidoMaterno }}</td>
                                    <td>{{ $empleado ->Numero_tel }}</td>
                                    
                                    <td>  Editar | Borrar </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




