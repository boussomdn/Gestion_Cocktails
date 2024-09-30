<!-- resources/views/cocktails/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Cocktail</h1>
    <form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $cocktail->nom }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image (URL)</label>
            <input type="url" name="image" class="form-control" value="{{ $cocktail->image }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $cocktail->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
        <a href="{{ route('cocktails.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
