Mostrar lista empleados


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

