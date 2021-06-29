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

        <div class="mb-3">
            <label for="direccion" class="form-label mb-2">EMAIL</label>
            <textarea wire:model="email" id="direccion" rows="2" class="form-control"
                placeholder="Ingresa Email"></textarea>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label mb-2">PASSWORD</label>
            <textarea wire:model="password" id="direccion" rows="2" class="form-control"
                placeholder="Ingresa Password"></textarea>
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
                    <th class="px-4 py-3 ">ID</th>
                    <th class="px-4 py-3 ">NOMBRE</th>
                    <th class="px-4 py-3">PASSWORD</th>
                    <th class="px-4 py-3">EMAIL</th>
                    <th class="px-4 py-3">FOTO</th>
                    <th class="px-4 py-3">ACCION</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr class="text-sm text-gray-500 ">
                    <td class="px-4 py-4 font-bold">{{ $user->id }}</td>
                    <td class="px-4 py-4">{{ $user->name }}</td>
                    <td class="px-4 py-4">{{ $user->password }}</td>
                    <td class="px-4 py-4">{{ $user->email }}</td>
                    <!-- <td class="px-4 py-4">{{ $user->profile_photo_path }}</td> -->
                    <td class="px-4 py-4">
                    <img src="/storage/{{ $user->profile_photo_path }}" alt=""></td>
                    <td class="px-4 py-4">
                        <button wire:click="edit({{$user}})"
                            class="bg-blue-600 mb-2 hover:bg-blue-700 text-white rounded  font-bold px-4 py-2">Editar</button>
                        <button wire:click="destroy({{$user}})"
                            class="bg-red-500 hover:bg-red-700 text-white rounded font-bold px-4 py-2">Eliminar</button>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</div>