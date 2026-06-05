<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('usuario.inicio');
});

Route::get('/projectos', function () {
    return view('usuario.projectos');
});

Route::get('/perfil', function () {
    return view('usuario.perfil');
});
  Route::get('/contacto', function () {
        return view('usuario.contacto');
    });

// Área contacto (somente logado)
Route::middleware('auth')->group(function () {

  
});

// Importar rotas
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';