<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas de Series (públicas)
Route::apiResource('series', SeriesController::class);

// Rutas protegidas con Sanctum (solo para logout)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::get('/api/test', function() {
    return 'test';
});
