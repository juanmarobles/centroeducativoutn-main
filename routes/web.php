<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormInscripcionController; 
use App\Http\Controllers\FormEmpleoController; 
use App\Http\Controllers\UsuariosController; 
use App\Http\Controllers\ComentarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('indexinvitado');
})->name('indexinvitado');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/empleo', function () {
    return view('empleo');
})->name('empleo');

Route::get('/loginerror', function () {
    return view('loginerror');
})->name('loginerror');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/crear-usuario', [UsuariosController::class, 'crearUsuario'])->name('crear.usuario');

Route::post('/procesar-formulario', [FormInscripcionController::class, 'procesarInscripcion'])->name('procesar.formulario');
Route::post('/procesar-formularioempleo', [FormEmpleoController::class, 'procesarInscripcionEmpleo'])->name('procesar.formularioempleo');

//comentarios
Route::get('/comentarios', [ComentarioController::class, 'index'])->name('comentarios');
Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store'); 




