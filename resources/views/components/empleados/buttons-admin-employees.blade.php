{{-- Sección Botones --}}
<div class="contendor-accesos-directos">
    <x-empleados.boton-admin name="Crear" href="{{ route('empleado.index') }}">
        <x-slot:image>
            <x-empleados.icono-modificar />
        </x-slot:image>
    </x-empleados.boton-admin>
    {{-- <x-empleados.boton-admin name="Modificar">
        <x-slot:image>
            <x-empleados.icono-modificar />
        </x-slot:image>
    </x-empleados.boton-admin> --}}

    {{-- <x-empleados.boton-admin name="Eliminar">
        <x-slot:image>
            <x-empleados.icono-eliminar />
        </x-slot:image>
    </x-empleados.boton-admin> --}}

    <x-empleados.boton-admin name="Consultar" href="{{ route('empleado.search') }}">
        <x-slot:image>
            <x-empleados.icono-consultar />
        </x-slot:image>
    </x-empleados.boton-admin>

</div>{{-- Fin Sección botones --}}