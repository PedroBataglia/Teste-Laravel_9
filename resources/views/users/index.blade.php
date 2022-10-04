@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 class="text-2x1 font-semibold leading-tight py-2">
    Listagem de usuários
    (<a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>)
</h1>

<form action="{{ route('users.index') }}" method="get" class="px-5 py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 py-2 bg-gray-200 appearance-nome rounded-lg">
    <button class="px-2 py-2 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-nome text-white rounded-lg" >Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th
                class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left"
            >
                Nome
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left"
            >
                E-mail
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left"
            >
                Created_at
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left"
            >
                Editar
            </th>
            <th
                class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left"
            >
                Detalhes
            </th>
        </tr>
    </thead>
    <tbody>
     @foreach($users as $user)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
            {{ $user->name }}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
            {{ $user->email }}
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                {{ $user->created_at }}
            </td>

            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a class="px-10 py-15 shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-nome text-white rounded-lg"
                    href="{{ route('users.edit', $user->id) }}">Editar</a>

            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a
                    class="px-10 py-15 shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-nome text-white rounded-lg"
                    href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </td>

        </tr>
     @endforeach
    </tbody>
</table>
@endsection
