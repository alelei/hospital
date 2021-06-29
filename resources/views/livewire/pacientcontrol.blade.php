<div class="container mx-auto pt-4
 ">
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Usuario') }}
        </h2>
    </x-slot>
    <div class="bg-white bg rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6 ">

        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">NOMBRE</label>
            <input wire:model="name" type="text" placeholder="Ingrese Nombre " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">APELLIDO</label>
            <input wire:model="surname" type="text" placeholder="Ingrese Apellido " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">EDAD</label>
            <input wire:model="age" type="text" placeholder="Ingrese Edad " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">SEXO</label>
            <input wire:model="sex" type="text" placeholder="Ingrese Sexo " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">TELEFONO</label>
            <input wire:model="telephone" type="text" placeholder="Ingrese Telefono " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">DIRECCION</label>
            <input wire:model="address" type="text" placeholder="Ingrese Direccion " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">TIPO DE SANGRE</label>
            <input wire:model="blood_type" type="text" placeholder="Ingrese Tipo de sangre " class="form-control">
        </div>
        <div class="mb-2">
            <label for="nombre" class="form-label mb-2">DIAGNOSTICO</label>
            <textarea wire:model="diagnostic" id="direccion" rows="2" class="form-control"
                placeholder="Ingresa diagnostico"></textarea>
            {{-- <input wire:model="diagnostic" type="text" placeholder="Ingrese diagnostico " class="form-control"> --}}
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label mb-2">EMAIL</label>
            <input wire:model="email" type="text" placeholder="Ingrese email " class="form-control">
            {{-- <textarea wire:model="email" id="direccion" rows="2" class="form-control"
                placeholder="Ingresa Email"></textarea> --}}
        </div>



        @if ($accion == "store")
        <button wire:click="store"
            class="bg-blue-600 mb-2 hover:bg-blue-600 text-white rounded  font-bold px-4 py-2">+</button>
        @else

        <button wire:click="update" class="bg-blue-600 mb-2 hover:bg-blue-700 text-white rounded  font-bold px-4 py-2">
            Actualizar</button>
        <button wire:click="default" class="bg-red-600 mb-2 hover:bg-red-700 text-white rounded  font-bold px-4 py-2">
            Cancelar</button>

        @endif
    </div>
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl min-w-max-content mx-auto">

        <table class="bg-white rounded-lg shadow overflow-hidden text-left ">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr class="text-xs  text-gray-800 ">
                    {{-- <th class="px-4 py-3 ">ID</th> --}}
                    <th class="px-4 py-3 ">NOMBRE</th>
                    <th class="px-4 py-3 ">AÑOS</th>
                    <th class="px-4 py-3">SEXO</th>
                    <th class="px-4 py-3">TELEFONO</th>
                    <th class="px-4 py-3">DIRECCION</th>
                    <th class="px-4 py-3">TIPO DE SANGRE</th>
                    <th class="px-4 py-3">DIAGNOSTICO</th>
                    <th class="px-4 py-3">EMAIL</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($pacient as $pacients)
                <tr class="text-sm text-gray-500 ">
                    <td class="px-4 py-4 font-bold">{{ $pacients->id }}</td>
                    <td class="px-4 py-4">{{ $pacients->name }}</td>
                    <td class="px-4 py-4">{{ $pacients->surname }}</td>
                    <td class="px-4 py-4">{{ $pacients->age }}</td>
                    <td class="px-4 py-4">{{ $pacients->sex }}</td>
                    <td class="px-4 py-4">{{ $pacients->telephone }}</td>
                    <td class="px-4 py-4">{{ $pacients->address }}</td>
                    <td class="px-4 py-4">{{ $pacients->blood_type }}</td>
                    <td class="px-4 py-4">{{ $pacients->diagnostic }}</td>
                    <td class="px-4 py-4">{{ $pacients->email }}</td>                   
                    <td class="px-4 py-4">
                    <td class="px-4 py-4">
                        <button wire:click="edit({{$pacient}})"
                            class="bg-blue-600 mb-2 hover:bg-blue-700 text-white rounded  font-bold px-4 py-2">Editar</button>
                        <button wire:click="destroy({{$pacient}})"
                            class="bg-red-500 hover:bg-red-700 text-white rounded font-bold px-4 py-2">Eliminar</button>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</div>