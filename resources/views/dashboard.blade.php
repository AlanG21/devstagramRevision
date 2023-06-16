@extends('layouts.app')

@section('titulo')
Tu Cuenta
@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-full md:w-6/12 lg:w-4/12 md:flex">
        <div class="md:w-7/12 lg:w-6/12 px-5">
            <img src="{{ asset('img/usuario.svg')}}" alt="imagen usuario">
        </div>
        <div class="md:w-8/12 lg:w-6/12 px-5 md:flex-col md:justify-center">
            <p class="text-gray-700 text-2xl">{{$user->username}}</p>

            <!-- Añadir más contenido -->
            <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                0
                <span class="font-normal">Seguidores</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                0
                <span class="font-normal">Siguiendo</span>
            </p>
            <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                0
                <span class="font-normal">Post</span>
            </p>

            <!-- Mostrar la tabla de imágenes -->
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <!-- Agrega más columnas aquí según tus necesidades -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->titulo}}</td>
                        <td>{{$post->descripcion}}</td>
                        <!-- Agrega más columnas aquí según tus necesidades -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
