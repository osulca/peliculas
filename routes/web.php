<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntregaCompraController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PaisController;
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
    return redirect(Route('login'));
});

Route::get('cliente/direccion', [ClienteController::class, 'mostrarDireccion'])->middleware('auth');
Route::post('cliente/direccion', [ClienteController::class, 'guardarDireccion']);

Route::get('cliente/compra', [EntregaCompraController::class, 'formularioCompra']);
Route::post('cliente/compra', [EntregaCompraController::class, 'guardarCompra']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('peliculas/ver/{id}', [PeliculaController::class, 'peliculaPorId']);
Route::get('peliculas/mostrar', [PeliculaController::class, 'show']);

Route::get('paises/mostrar/{pais}', [PaisController::class, 'getDatosPais']);