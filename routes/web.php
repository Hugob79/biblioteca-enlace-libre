<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\UsuarioLibrosController;


#De los libros
Route::get('/', [LibroController::class, 'index']);
Route::get('/novela', [LibroController::class, 'novela']);
Route::get('/cuento', [LibroController::class, 'cuento']);
Route::get('/ensayo', [LibroController::class, 'ensayo']);
Route::get('/poesia', [LibroController::class, 'poesia']);

#De la ayuda y otros datos
Route::get('/proyecto', [AyudaController::class, 'index']);
Route::get('/edita', [AyudaController::class, 'edita']);
Route::get('/colabora', [AyudaController::class, 'colabora']);

#Del usuario y sus libros
Route::get('/usuario', [UsuarioLibrosController::class, 'index'])->middleware('auth');
Route::get('/ingresarLibro', [UsuarioLibrosController::class, 'ingresarLibro'])->middleware('auth');
Route::post('/recibeLibro', [UsuarioLibrosController::class, 'recibeLibro'])->middleware('auth');

require __DIR__.'/auth.php';
