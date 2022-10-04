@extends('layouts.app')

@section('title', 'Novo Usuários')
@section('content')
<h1 class="text-2x1 font-semibold leading-tight py-2">Novo Usuário</h1>
@include('users.includes.validations-form')

<form action="{{ route('users.store')  }}" method="post">
    @csrf
    @include('users._partials.form')

</form>
@endsection


