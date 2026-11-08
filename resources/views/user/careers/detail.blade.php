@extends('layouts.user')

@section('title')
Detalhes da Carreira
@endsection
@section('content')
<a href="{{ route('user.careers.edit', ['id' => $career['id']]) }}">Editar</a>

<p>
    <strong>ID:</strong> {{ $career['id'] }}
</p>

<p>
    <strong>Nome:</strong> {{ $career['name'] }}
</p>
@endsection