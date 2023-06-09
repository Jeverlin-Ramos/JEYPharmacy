<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [App\Http\Controllers\ProductoController::class, 'mostrarProductos']);

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view');
Route::get('/products-detail/{id}', [App\Http\Controllers\ProductoController::class, 'showDetail'])->name('productos-detail');

Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::get('/carrito/agregar-producto', [App\Http\Controllers\CarritoController::class, 'agregarProducto'])->name('carrito.agregar-producto')->middleware('auth');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'mostrarCarrito'])
    ->name('carrito.mostrar')
    ->middleware('auth');

Route::post('/carrito/agregar-producto-con-cantidad', [App\Http\Controllers\CarritoController::class, 'agregarProductoConCantidad'])->name('carrito.agregar-producto-con-cantidad')->middleware('auth');
Route::put('/carrito/actualizar-cantidad/{detalleCarrito}', [App\Http\Controllers\CarritoController::class, 'actualizarCantidad'])
->name('carrito.actualizar-cantidad')
->middleware('auth');

Route::delete('/carrito/eliminar-producto/{id}', [App\Http\Controllers\CarritoController::class, 'eliminarProducto'])->name('carrito.eliminar-producto')->middleware('auth');


Route::post('/carrito/realizar-pedido', [App\Http\Controllers\CarritoController::class, 'realizarPedido'])->name('carrito.realizar-pedido')->middleware('auth');

Route::get('/pedido-confirmado', function () {
    return view('pedido_confirmado');
})->name('pedido.confirmado')->middleware('auth');


Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::resource('pedidos', App\Http\Controllers\PedidoController::class)->middleware('auth');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
