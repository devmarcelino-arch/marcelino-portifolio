<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\ConteudoController;
use App\Http\Controllers\Admin\FicheiroController;
use App\Http\Controllers\Admin\MensagemController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [PainelController::class, 'index']);

    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::post('/usuarios', [UsuarioController::class, 'store']);
    Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
    Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

    Route::get('/conteudos', [ConteudoController::class, 'index']);
    Route::post('/conteudos', [ConteudoController::class, 'store']);
    Route::put('/conteudos/{id}', [ConteudoController::class, 'update']);
    Route::delete('/conteudos/{id}', [ConteudoController::class, 'destroy']);

    Route::get('/ficheiros', [FicheiroController::class, 'index']);
    Route::post('/ficheiros', [FicheiroController::class, 'store']);
    Route::delete('/ficheiros/{id}', [FicheiroController::class, 'destroy']);

    Route::get('/mensagens', [MensagemController::class, 'index']);
    Route::delete('/mensagens/{id}', [MensagemController::class, 'destroy']);
});