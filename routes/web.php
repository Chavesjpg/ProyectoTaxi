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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/conductor/{id}', 'ConductorController@mostrarPerfil')->name('conductor.perfil');
Route::get('/conductor/{id}/editar', 'ConductorController@editarPerfil')->name('conductor.editar');
Route::put('/conductor/{id}', 'ConductorController@actualizarPerfil')->name('conductor.actualizar');

