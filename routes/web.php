<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarWarsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\AuthController;

Route::get('/star-wars', [StarWarsController::class, 'index'])->name('starWars.index');
Route::get('/star-wars/characters', [StarWarsController::class, 'showCharacters'])->name('starWars.characters');
Route::get('/vehicles/{id}', [StarWarsController::class, 'showVehicle'])->name('vehicles.show');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('series', SeriesController::class)->except(['index', 'show']);
});

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/{id}', [SeriesController::class, 'show'])->name('series.show');

Route::get('/api/test', function() {
    return 'test';
});
