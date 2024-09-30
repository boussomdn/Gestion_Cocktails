<?php
use App\Http\Controllers\CocktailController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('cocktails/create', [CocktailController::class, 'create']);

Route::get('/', [CocktailController::class, 'index']);
Route::get('/cocktails/{id}', [CocktailController::class, 'show']);
Route::post('/cocktails', [CocktailController::class, 'store']);
Route::get('cocktails/edit', [CocktailController::class, 'edit']);
Route::put('/cocktails/{id}', [CocktailController::class, 'update']);
Route::delete('/cocktails/{id}', [CocktailController::class, 'destroy']);

Route::resource('cocktails', CocktailController::class);
