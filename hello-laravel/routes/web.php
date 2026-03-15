<?php

use App\Http\Controllers\UniverseController;
use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;
use App\Models\Character;
use App\Models\Universe;

Route::get('/', function () {
    $characters = Character::where('gender', 'male')->get();
    return response()->json($characters);
});



/*Route::get('/universe/movements', function () {

    // CREATE
    $create = Universe::create([
        'universe' => 'U1',
        'company' => 'Marvel',
        'edge' => 'silver'
    ]);

    // READ
    $read = Universe::all();

    // UPDATE
    $universe = Universe::find($create->id);
    $universe->update([
        'edge' => 'gold'
    ]);

    return [
        'created' => $create,
        'all_universes' => $read,
        'updated' => $universe
    ];

});




Route::get('/character/movements', function () {

    // CREATE
    $create = Character::create([
        'name' => 'Spider-Man',
        'real_name' => 'Peter Parker',
        'gender' => 'male',
        'universe_id' => 1
    ]);

    // READ
    $read = Character::with('universe')->get();

    // UPDATE
    $character = Character::find($create->id);
    $character->update([
        'name' => 'Spider-Man Updated'
    ]);

    return [
        'created' => $create,
        'all_characters' => $read,
        'updated' => $character
    ];

});*/
Route::resource('universe', UniverseController::class);
Route::resource('characters', CharacterController::class);