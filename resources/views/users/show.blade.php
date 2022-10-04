@extends('layouts.app')

@section('title', 'Listagem dos Usuários')
@section('content')
<h1 class="text-2x1 font-semibold leading-tight py-2">
    Listagem do Usuario {{ $user->name  }}
</h1>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left">
                Name
            </th>
            <th clss="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left">
                E-mail
            </th>

            <th class="px-5 py-3 border-b-2 border-gray-20 bg-gray-100 text-left">
                Created_at
        </tr>
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                {{ $user->name }}
            </td>

            <td class="px-5 py-5 border-b border-gray-200 bg-white text-center">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{ $user->email }}
            </td>

            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{ $user->created_at }}
            </td>

        </tr>

    </thead>
</table>
<tr>
    <td>
        <form class="min-w-full leading-normal rounded-lg overflow-hidden"  action="{{ route('users.delete', $user->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="px-5 py-5 shadow bg-red-500 hover:bg-red-400 focus:outline-nome text-white rounded-lg"
                    type="submit">Deleter</button>
        </form>
    </td>
</tr>
@endsection


