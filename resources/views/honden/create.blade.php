@extends('layout')

@section('content')

<h1>Voeg een hond toe</h1>

<form action="/honden" method="post">
    
    @include('honden.form')

    <button> Toevoegen </button> <a href="/honden">Terug</a>

</form>

@endsection