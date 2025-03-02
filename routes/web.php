<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarWarsController;

Route::get('/star-wars', [StarWarsController::class, 'index'])->name('starWars.index');
Route::get('/star-wars/characters', [StarWarsController::class, 'showCharacters'])->name('starWars.characters');
Route::get('/vehicles/{id}', [StarWarsController::class, 'showVehicle'])->name('vehicles.show');
