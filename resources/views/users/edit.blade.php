@extends('layouts.app')

@section('title', "Editando o Usuário {$user->name}")
@section('content')
<h1 class="text-2x1 font-semibold leading-tight py-2">Editar o Usuário {{ $user->name }}</h1>

@include('users.includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')


</form>
@endsection


