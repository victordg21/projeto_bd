@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Informações do usuário {{$user->name}}</h1>

    <ul>
        <li>{{ $user->name}}</li>
        <li>{{ $user->email}}</li>
        <li>{{ $user->preferred_gender}}</li>
    </ul>
    
    <form class="py-12" action="{{route('users.destroy', $user -> id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" type="submit">Deletar</button>
    </form>
@endsection

