<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AyudaController;


#de los libros
Route::get('/', [LibroController::class, 'index']);
Route::get('/novela', [LibroController::class, 'novela']);
Route::get('/cuento', [LibroController::class, 'cuento']);
Route::get('/ensayo', [LibroController::class, 'ensayo']);
Route::get('/poesia', [LibroController::class, 'poesia']);

#de la ayuda y otros datos
Route::get('/proyecto', [AyudaController::class, 'index']);
Route::get('/edita', [AyudaController::class, 'edita']);
Route::get('/colabora', [AyudaController::class, 'index']);


require __DIR__.'/auth.php';
