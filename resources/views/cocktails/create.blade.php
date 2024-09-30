<!-- resources/views/cocktails/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Cocktail</h1>
    <form action="{{ route('cocktails.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image (URL)</label>
            <input type="url" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('cocktails.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
