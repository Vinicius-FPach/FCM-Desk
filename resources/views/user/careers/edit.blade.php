@extends('layouts.user')

@section('title')
Modificar Carreira
@endsection
@section('content')

<form action="{{ route('user.careers.update', ['id' => $career['id']]) }}" method="POST">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $career['name'] }}">

    <button type="submit">Salvar</button>
</form>
@endsection