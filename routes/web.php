<?php

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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::post('guardar',[App\Http\Controllers\HomeController::class,'store'])->middleware('auth');
Route::resource('privilegios', App\Http\Controllers\PrivilegioController::class)->middleware('auth');
Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('estantes', App\Http\Controllers\EstanteController::class)->middleware('auth');
Route::resource('lotes', App\Http\Controllers\LoteController::class)->middleware('auth');
Route::resource('reposiciones', App\Http\Controllers\ReposicioneController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
