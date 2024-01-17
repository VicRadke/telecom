@extends('layouts.app')
@section('content')
<script>
    {{-- <button type="submit">Eliminar</button> --}}
<input 
	type="button" 
	value="Eliminar" 
	onclick="if(confirm('¿Confirma eliminar?')){
		document.getElementById('eliminar-curso').submit()
	};" 
/>
</script>

<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.page-title {
    color: #1e7e34;
    font-weight: bold;
    text-align: center;
}

.admin-buttons {
    text-align: center;
    margin-bottom: 20px;
}

.prestador-title {
    color: #1e7e34;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.styled-table th, .styled-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.styled-table th {
    background-color: #1e7e34;
    color: #fff;
}



form {
    display: inline; /* Para que el formulario y el botón estén en línea */
}

button {
    background-color: #dc3545; /* Color de fondo rojo (puedes cambiarlo) */
    color: #6b4848; /* Color del texto cafe*/
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Agrega una transición al color de fondo */
}

button:hover {
    background-color: #c82333; /* Cambia el color de fondo al pasar el mouse sobre el botón */
}






</style>   
<h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

    <x-empleados.buttons-admin-employees/>
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
                <td>{{ $empleado->spanish_birth_date}}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
  </form>

@endsection
