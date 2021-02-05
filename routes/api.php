<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/cours', function() {
    return \App\Models\Cour::all();
});

// Retourne un cours en particulier
Route::get('/cours/{courId}', function($courId) {
    return \App\Models\Cour::find($courId);
});

// Modifie un cours particulier
Route::put('/cours/{courId}', function($courId, Request $request) {
    $cour = \App\Models\Cour::find($courId);
    return $cour->update($request->all());
});

// Ajouter un cours
Route::post('/cours', function(Request $request) {
    return \App\Models\Cour::create($request->all());
});

// Supprimer un cours en particulier
Route::delete('/cours/{courId}', function($courId) {
    return \App\Models\Cour::find($courId)->delete();
});
