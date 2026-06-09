<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\ConteudoController;
use App\Http\Controllers\Admin\FicheiroController;
use App\Http\Controllers\Admin\MensagemController;
use App\Http\Controllers\Admin\ProjetoController;

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    /* =========================
       PAINEL
    ========================= */
    Route::get('/', [PainelController::class, 'index']);

    /* =========================
       USUÁRIOS
    ========================= */
    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::post('/usuarios', [UsuarioController::class, 'store']);
    Route::post('/usuarios/{id}/update', [UsuarioController::class, 'update']);
    Route::post('/usuarios/{id}/delete', [UsuarioController::class, 'destroy']);

    /* =========================
       CONTEÚDOS
    ========================= */
    Route::get('/conteudos', [ConteudoController::class, 'index']);
    Route::post('/conteudos', [ConteudoController::class, 'store']);
    Route::post('/conteudos/{id}/update', [ConteudoController::class, 'update']);
    Route::post('/conteudos/{id}/delete', [ConteudoController::class, 'destroy']);

    /* =========================
       FICHEIROS
    ========================= */
    Route::get('/ficheiros', [FicheiroController::class, 'index']);
    Route::post('/ficheiros', [FicheiroController::class, 'store']);
    Route::post('/ficheiros/{id}/delete', [FicheiroController::class, 'destroy']);

    /* =========================
       MENSAGENS
    ========================= */
    Route::get('/mensagens', [MensagemController::class, 'index']);
    Route::post('/mensagens/{id}/delete', [MensagemController::class, 'destroy']);

    /* =========================
       PROJETOS (CRUD)
    ========================= */

    // LISTAR
    Route::get('/projetos', [ProjetoController::class, 'index'])->name('projetos.index');

    // FORM CRIAR
    Route::get('/projetos/create', [ProjetoController::class, 'create'])->name('projetos.create');

    // SALVAR
    Route::post('/projetos', [ProjetoController::class, 'store'])->name('projetos.store');

    // FORM EDITAR
    Route::get('/projetos/{id}/edit', [ProjetoController::class, 'edit'])->name('projetos.edit');

    // ATUALIZAR
    Route::post('/projetos/{id}/update', [ProjetoController::class, 'update'])->name('projetos.update');

    // APAGAR
    Route::post('/projetos/{id}/delete', [ProjetoController::class, 'destroy'])->name('projetos.destroy');

});