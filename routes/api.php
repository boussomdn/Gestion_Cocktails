<?php
use App\Http\Controllers\CocktailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cocktails/create', [CocktailController::class, 'create']);

Route::get('/', [CocktailController::class, 'index']);
Route::get('/cocktails/{id}', [CocktailController::class, 'show']);
Route::post('/cocktails', [CocktailController::class, 'store']);
Route::get('cocktails/edit', [CocktailController::class, 'edit']);
Route::put('/cocktails/{id}', [CocktailController::class, 'update']);
Route::delete('/cocktails/{id}', [CocktailController::class, 'destroy']);

Route::resource('cocktails', CocktailController::class);

