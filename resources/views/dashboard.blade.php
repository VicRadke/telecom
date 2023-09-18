<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div style="display: flex; justify-content: center;">
        <button style="border: 2px solid black;">Botón 1</button>
        <button style="border: 2px solid black;">Botón 2</button>
        <button style="border: 2px solid black;">Botón 3</button>
        <button style="border: 2px solid black;">Botón 4</button>
        <button style="border: 2px solid black;">Botón 5</button>

    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
  

</x-app-layout>
