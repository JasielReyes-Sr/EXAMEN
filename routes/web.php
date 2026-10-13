<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MaterialeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaProductoController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/detalles', [DetalleProductoController::class, 'index']);
Route::get('/empleado', [EmpleadoController::class, 'index']);
Route::get('/materiales', [MaterialeController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/proveedores', [ProveedoreController::class, 'index']);