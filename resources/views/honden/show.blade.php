@extends('layout')

@section('content')

<h1>Hond details</h1>

<div>
    <a href="/honden">Terug</a>
</div>

<strong>Naam</strong>
<p>{{ $dog->name }}</p>

<strong>Leeftijd</strong>
<p>{{ $dog->age }}</p>

<strong>Geslacht</strong>
<p>{{ $dog->gender }}</p>

<strong>Beschrijving</strong>
<p>{{ $dog->description }}</p>

<div>
    <a href="/honden/{{ $dog->id }}/edit">Bewerken</a>

<form action="/honden/{{ $dog->id }}"  method="post">
        @method('DELETE')
        @csrf

        <button>Delete</button>
    </form>
</div>

@endsection