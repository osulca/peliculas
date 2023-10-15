<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntregaCompraController;
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

Route::get('cliente/direccion', [ClienteController::class, 'mostrarDireccion']);
Route::post('cliente/direccion', [ClienteController::class, 'guardarDireccion']);

Route::get('cliente/compra', [EntregaCompraController::class, 'formularioCompra']);
Route::post('cliente/compra', [EntregaCompraController::class, 'guardarCompra']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
