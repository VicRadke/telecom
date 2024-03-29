@extends('layouts.app')
@section('content')
<script>
    // script.js
document.addEventListener('DOMContentLoaded', function () {
  var eliminarBtn = document.getElementById('eliminarBtn');
  var popupContainer = document.createElement('div');
  popupContainer.className = 'popup-container';

  var popupMessage = document.createElement('div');
  popupMessage.className = 'popup-message';
  popupMessage.textContent = '¿Seguro que desea eliminar?';

  var popupButtons = document.createElement('div');
  popupButtons.className = 'popup-buttons';

  var confirmButton = document.createElement('button');
  confirmButton.textContent = 'Sí';
  confirmButton.addEventListener('click', function () {
    alert('Eliminar lógico aquí'); 
    popupContainer.style.display = 'none';
  });

  var cancelButton = document.createElement('button');
  cancelButton.textContent = 'No';
  cancelButton.addEventListener('click', function () {
    popupContainer.style.display = 'none';
  });

  popupButtons.appendChild(confirmButton);
  popupButtons.appendChild(cancelButton);

  popupContainer.appendChild(popupMessage);
  popupContainer.appendChild(popupButtons);
  document.body.appendChild(popupContainer);

  eliminarBtn.addEventListener('click', function () {
    popupContainer.style.display = 'block';
  });
});
</script>
<style>
    .popup-container {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.popup-message {
  margin-bottom: 10px;
}

.popup-buttons {
  display: flex;
  justify-content: space-between;
}

.popup-buttons button {
  padding: 5px 10px;
  cursor: pointer;
}
    /* Estilo para el formulario de búsqueda */
.form-inline {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.form-inline label {
    margin-right: 10px;
}

.form-inline input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-inline button {
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color: #07468a;
    color: #fff;
}

.form-inline button:hover {
    background-color: #0056b3;
}

/* Estilo para la tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #06651f;
    color: #fff;
}

/* Estilo para los botones en la tabla */
.btn-primary {
    background-color: #09772c;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
}

.btn-primary, .btn-danger:hover {
    opacity: 0.8;
}

</style>

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
                        <button id="eliminarBtn" type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="mt-2 mb-3">
        {{ $employees->links() }}
    </div>
@endsection
