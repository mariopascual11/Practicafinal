<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\ConferencistaController;
use App\Http\Controllers\TemaController;


// Ruta de prueba para verificar si la API funciona correctamente
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando correctamente']);
});

// CRUD para Salas
Route::apiResource('salas', SalaController::class);

// CRUD para Eventos
Route::apiResource('eventos', EventoController::class);

// CRUD para Participantes
Route::apiResource('participantes', ParticipanteController::class);

// CRUD para Conferencistas
Route::apiResource('conferencistas', ConferencistaController::class);

// CRUD para Temas
Route::apiResource('temas', TemaController::class);

// Rutas adicionales para inscribir participantes en eventos
Route::post('/eventos/{evento}/inscribir', [EventoController::class, 'inscribirParticipante']);
Route::get('/eventos/{evento}/participantes', [EventoController::class, 'listarParticipantes']);

// Rutas adicionales para asignar temas a eventos
Route::post('/eventos/{evento}/asignar-tema', [EventoController::class, 'asignarTema']);
Route::get('/eventos/{evento}/temas', [EventoController::class, 'listarTemas']);
