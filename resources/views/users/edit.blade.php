@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Editar Usuário {{$user -> name}}</h1>
    
    @if ($errors -> any())
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
            <ul class="errors">
                @foreach ($errors -> all() as $error)
                    <li class="error">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('users.update', $user -> id)}}" method="post">
        @method('PUT')
        <div class="w-full bg-white shadow-md rounded px-8 py-12">
            @csrf
            <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
            <input type="email" name="email" placeholder="E-mail:" value="{{old('email')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
            <input type="text" name="preferred_gender" placeholder="Gênero preferido:" value="{{old('preferred_gender')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
            <input type="password" name="password" placeholder="Senha:" value="{{old('password')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
            <button class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" type="submit">Enviar</button>
        </div>
    </form>
@endsection