<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Rotas Web
|--------------------------------------------------------------------------
*/

// Rotas estáticas
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

// Rotas de contato (GET para exibir, POST para processar)
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');

// Rota de fallback (para páginas não encontradas)
Route::fallback(function () {
    return redirect()->route('home');
});