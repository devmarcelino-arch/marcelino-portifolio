<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('usuario.inicio');
});

Route::get('/projetos/create', [ProjetoController::class, 'create'])->name('projetos.create');

Route::get('/projectos', function () {
    return view('usuario.projectos');
});

Route::get('/perfil', function () {
    return view('usuario.perfil');
});

// SOMENTE LOGADO
Route::middleware('auth')->group(function () {

    Route::get('/contacto', function () {
        return view('usuario.contacto');
    });

});

// Importar rotas
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';