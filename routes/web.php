<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormInscripcionController; 
use App\Http\Controllers\FormEmpleoController; 
use App\Http\Controllers\UsuariosController; 
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\AuthController;


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

Route::get('/indexinvitado', function () {
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


Route::post('/crear-usuario', [UsuariosController::class, 'crearUsuario'])->name('crear.usuario');

Route::post('/procesar-formulario', [FormInscripcionController::class, 'procesarInscripcion'])->name('procesar.formulario');
Route::post('/procesar-formularioempleo', [FormEmpleoController::class, 'procesarInscripcionEmpleo'])->name('procesar.formularioempleo');

//comentarios
Route::get('/comentarios', [ComentarioController::class, 'index'])->name('comentarios');
Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store'); 

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::view('/index', 'index')->name('index'); // Ruta de redirección a index.blade.php
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/descargar', function () {
    return view('descargar');
})->name('descargar');





