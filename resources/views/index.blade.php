@extends('layout.app')

@section('title')
    Página principal
@endsection

@section('content')

    <div class="w-full h-screen flex items-center justify-center flex-col gap-7">
          <h1 class="text-4xl font-bold">Bienvenido</h1>
            <div class="w-1/4 flex flex-col gap-4">
                <a href="{{ route('login') }}" class="bg-sky-500 text-white p-4  hover:scale-105 ">Iniciar Sesión</a>
                <a href="{{ route('register.index') }}" class="bg-sky-500 text-white p-4  hover:scale-105">Registrarse</a>
            </div>
            
    </div>
@endsection
