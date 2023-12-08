@extends('layout.app')

@section('title')
    Home  Electródomesticos
@endsection

@section('content')
    <nav class="w-full h-16 shadow bg-blue-600 text-white flex justify-around items-center">
        <p class="text-xl font-semibold">{{ auth()->user()->name }}</p>
        <a class="text-xl font-semibold hover:scale-105 transition-all" href="{{route('login')}}">Cerrar sesión</a>
    </nav>
    <div class="w-1/2 p-10">
        <div class="w-full flex justify-between items-center">
            <h1 class="text-xl font-bold">Registro de empleados</h1>
            <a href="{{ route('crear') }}" class="p-3 bg-blue-800 text-white hover:scale-105 transition-all">Crear</a>
        </div>
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 ">Id</th>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500">Nombre</th>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500">Cédula</th>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500">Direccion</th>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500">Teléfono</th>
                    <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($empleados as $i)
                    <tr>
                        <td class="px-6  font-medium">{{ $i->id }}</td>
                        <td class="px-6">{{ $i->nombre }}</td>
                        <td class="px-6">{{ $i->cedula }}</td>
                        <td class="px-6">{{ $i->direccion }}</td>
                        <td class="px-6">{{ $i->telefono }}</td>
                        <td class="flex flex-row gap-3">
                            <a href="{{ route('editar', $i->id) }}" class="p-2 bg-blue-600 text-white">Editar</a>
                            <a href="{{ route('delete', $i->id)}}" class="p-2 bg-red-700 text-white">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
