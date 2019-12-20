@extends('layout')

@section('content')
<h1>Hier worden honden weergegeven.</h1>

<a href="honden/create">Nieuwe hond toevoegen</a>

@forelse($dogs as $dog)
<p><strong>
<a href="honden/{{ $dog->id }}">{{ $dog->name }}</a>
    </strong>({{ $dog->age }}), {{ $dog->gender }}<br> <i>{{ $dog->description }}</i></p>
@empty
    <p>Geen honden beschikbaar.</p>
@endforelse

@endsection