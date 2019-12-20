@extends('layout')

@section('content')

<h1>Bewerken</h1>

<form action="/honden/{{ $dog->id }}" method="post">
    
    @method('PATCH')

    @include('honden.form')

    <button> Opslaan </button> <a href="/honden/{{ $dog->id }}">Terug</a>

</form>

@endsection