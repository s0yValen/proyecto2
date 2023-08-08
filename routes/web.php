<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', function () {
    return view('vue');
});

Route::get('/usuarios', [UsuariosController::class, 'index']);

Route::post('/certificadoNoPension', [UsuariosController::class, 'consultarPensionado']);

//Route::get('/certificacion/nopension',[UsuariosController::class, 'pdf'] );

Route::get('/verpdf',[UsuariosController::class, 'verPdf']);



Route::view('/descargar', 'descargar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
