<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//ruta para el inicio de la pagina
Route::get('/index/index', function(){
    return view('index.index');
})->name('index.index');

//ruta para el login del sistema
Route::get('/index/login', function(){
    return view('index.login');
})->name('index.login');
