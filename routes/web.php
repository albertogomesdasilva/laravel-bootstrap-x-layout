<?php

use \App\Http\Controllers\MachinesController;
use \App\Http\Controllers\NovaController;
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

Route::get('/welcome', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/', [MachinesController::class, 'index'])->middleware('auth');

Route::get('/listar-maquinas', [MachinesController::class, 'index'])->middleware('auth');
Route::get('/listar-nova', [NovaController::class, 'index'])->middleware('auth');
Route::get('/visualizar-maquina/{id}', [MachinesController::class, 'show'])->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
