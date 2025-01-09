<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PaginasController::class, 'index']);

Route::get('/quemSomos', [PaginasController::class, 'quemSomos']);

Route::get('/noticias', [PaginasController::class, 'noticias']);

Route::get('/contato', [PaginasController::class, 'contato']);

Route::get('/partidas', [PaginasController::class, 'partidas']);

Route::get('/filmes', [PaginasController::class, 'filmes']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
