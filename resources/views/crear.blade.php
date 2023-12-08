@extends('layout.app')

@section('title')
    Crear Electródomesticos
@endsection

@section('content')
    <nav class="w-full h-16 shadow bg-blue-600 text-white flex justify-around items-center">
        <p class="text-xl font-semibold">{{ auth()->user()->name }}</p>
        <a class="text-xl font-semibold hover:scale-105 transition-all" href="{{route('login')}}">Cerrar Sesión</a>
    </nav>
    <div class="w-1/2 p-10">
        <form action="{{ route('empleados.store')}}" class="flex flex-col gap-4" method="post">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"  class="border border-gray-500 p-2  @error('nombre') border-red-500 @enderror" value="{{ old('nombre')}}">
            </div>
            @error('nombre')
                <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" class="border border-gray-500 p-2  @error('cedula') border-red-500 @enderror" value="{{ old('cedula')}}">
            </div>
            @error('cedula')
                <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="border border-gray-500 p-2  @error('direccion') border-red-500 @enderror" value="{{ old('direccion')}}">
            </div>
            @error('direccion')
                <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" class="border border-gray-500 p-2  @error('telefono') border-red-500 @enderror" value="{{ old('telefono')}}">
            </div>
            @error('telefono')
                <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <button type="submit" class="p-1 bg-blue-600 text-white hover:scale-105 transition-all">Guardar</button>
        </form>
    </div>
@endsection