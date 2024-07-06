<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');




// Rutas del Crud Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::delete('/productos/{id_producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/productos/{id_producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id_producto}', [ProductoController::class, 'update'])->name('productos.update');
