<!-- resources/views/cocktails/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $cocktail->nom }}</h1>
    <img src="{{ $cocktail->image }}" alt="{{ $cocktail->nom }}" width="300">
    <p>{{ $cocktail->description }}</p>
    <a href="{{ route('cocktails.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
