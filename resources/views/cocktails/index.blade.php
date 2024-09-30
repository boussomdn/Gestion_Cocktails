<!-- resources/views/cocktails/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Cocktails</h1>
    <a href="{{ route('cocktails.create') }}" class="btn btn-primary">Ajouter un Cocktail</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cocktails as $cocktail)
            <tr>
                <td>{{ $cocktail->nom }}</td>
                <td><img src="{{ $cocktail->image }}" alt="{{ $cocktail->nom }}" width="100"></td>
                <td>{{ $cocktail->description }}</td>
                <td>
                    <a href="{{ route('cocktails.show', $cocktail->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('cocktails.edit', $cocktail->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
