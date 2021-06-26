<?php

use App\Http\Controllers\ControladorUsuário;
use App\Http\Controllers\ControladorCursos;
use App\Http\Controllers\ControladorFormaIngresso;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/usuarios', ControladorUsuário::class);
Route::resource('/usuarios/novo', ControladorUsuário::class);
Route::resource('/cursos', ControladorCursos::class);
Route::resource('/cursos/novo', ControladorCursos::class);
Route::resource('/formas-ingresso', ControladorFormaIngresso::class);
Route::resource('/formas-ingresso/novo', ControladorFormaIngresso::class);