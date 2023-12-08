@extends('layout.app')


@section('title')
    Iniciar Sesión
@endsection

@section('content')

        <div class="w-1/2 h-screen flex items-center justify-center flex-col gap-5">
            <h1 class="text-3xl font-bold">Login</h1>
            <div class="w-1/3 flex flex-col gap-3">
                <form action="{{ route('login') }}" method="post" class="flex flex-col gap-5">
                    @csrf
                    @if(session('mensaje'))
                        <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                    @endif
                    <div class="flex flex-col gap-2">
                        <label for="email">Correo</label>
                        <input type="email" name="email" value="{{ old('email')}}" class="p-2 border border-sky-300  @error('email') border-red-500 @enderror">
                    </div>
                    @error('email')
                        <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col gap-2">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" value="{{ old('password')}}" class="p-2 border border-sky-300  @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                        <p class="bg-red-500 text-white my-2 -lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="p-2  bg-sky-500 text-white hover:scale-105 transition-all ">Iniciar sesión</button>
                </form>
                <a href="{{ route('register.index') }}" class="w-full p-2  text-white border bg-sky-500 text-center hover:scale-105 transition-all">Registrarse</a>
            </div>
        </div>
    </div>
@endsection
