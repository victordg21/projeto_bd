@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">
        Listagem dos Usuários
        <a style="text-decoration: none" class="bg-blue-900 rounded text-white py-1 px-4 text-sm" href="{{route('users.create')}}">Adicionar Usuário</a>
    </h1>

    <form class="py-5" action{{route('users.index')}} method="get" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
      <input class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" name="search" placeholder="Pesquisar">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </form>
    
    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Nome
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                E-mail
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Gênero Preferido
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Editar
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Detalhes
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Filmes Alugados
              </th>
            </tr>
          </thead>
          <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->preferred_gender }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Não(0)</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h2 class="text-2xl font-semibold leading-tigh py-5">Ver filmes disponíveis para Aluguel
      <a style="text-decoration: none" class="bg-blue-900 rounded text-white py-1 px-4 text-sm" href="{{route('movies.index')}}">-></a>
    </h2>
@endsection