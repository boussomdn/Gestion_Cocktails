<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    // Récupérer tous les cocktails
    // Récupérer tous les cocktails et afficher la vue
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('cocktails.index', compact('cocktails')); // Passer les cocktails à la vue
    }


    public function create(){
        return view('cocktails.create');
    }

    public function edit($id)
{
    $cocktail = Cocktail::findOrFail($id); // Récupère le cocktail via son ID
    return view('cocktails.edit', compact('cocktail')); // Passe la variable à la vue
}


    // Afficher un cocktail spécifique
    public function show($id)
    {
        return Cocktail::findOrFail($id);
    }

    // Ajouter un nouveau cocktail
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'image' => 'required|url',
            'description' => 'required|string',
        ]);

        $cocktail = Cocktail::create($validated);
        return response()->json($cocktail, 201);
    }

    // Modifier un cocktail existant
    public function update(Request $request, $id)
    {
        $cocktail = Cocktail::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'string',
            'image' => 'url',
            'description' => 'string',
        ]);

        $cocktail->update($validated);
        return response()->json($cocktail, 200);
    }

    // Supprimer un cocktail
    public function destroy($id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->delete();

        return response()->json(['message' => 'Cocktail supprimé'], 200);
    }
}

