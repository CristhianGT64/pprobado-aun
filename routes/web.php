<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ventasController;

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

Route::get('/principal/{id?}', [productosController::class, 'index'])->name("productos.principal");

Route::get('/NuevoProducto', [productosController::class, 'NuevoProducto'])->name("productos.nuevoProducto");

Route::post('/Guardar', [productosController::class, 'store'])->name("productos.guardar");
// Route::post('/')
Route::get('/VerProductos', [productosController::class, 'VerProductos'])->name("productos.verProductos");

Route::get('/prodcutos/vender', [productosController::class, 'ventas'])->name("vender.vender");

Route::post('/ventas/facturar/{id}', [ventasController::class, 'facturar'])->name("vender.facturar");

Route::get('/ventas/ventas', [ventasController::class, 'ventas'])->name("vender.ventas");

Route::post('/VerProductos/busqueda', [productosController::class, 'buscar'])->name("productos.buscarProdcuto");