@extends('layouts.user')

@section('title')
Listagem de Carreiras
@endsection
@section('content')
<x-flash />
 
<ul>
@forelse ($careers as $career)
    <li>
        <a href="{{ route('user.careers.detail', ['id' => $career['id']]) }}">
            {{ $career['name'] }}
        </a>
    </li>
    @empty
        <p>Sem carreiras</p>
@endforelse
</ul>
@endsection