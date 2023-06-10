<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

Auth::routes();
Route::get('/', [App\Http\Controllers\ProductoController::class, 'mostrarProductos']);

//PRODUCTOS
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view');
Route::get('/products-detail/{id}', [App\Http\Controllers\ProductoController::class, 'showDetail'])->name('productos-detail');

//CATEGORIAS
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

//RUTAS
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::resource('pedidos', App\Http\Controllers\PedidoController::class)->middleware('auth');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoControllerController::class)->middleware('auth');

//PRODUCTOS
Route::get('/producto', [\App\Http\Controllers\ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
Route::delete('/producto/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');
Route::get('/producto/{producto}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/producto/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::match(['PUT', 'PATCH'], '/producto/{producto}', [ProductoController::class, 'update'])->name('producto.update');

//USUARIOS
Route::get('/usuario', [\App\Http\Controllers\UserController::class, 'index'])->name('usuario.index');
Route::get('/usuario/create', [UserController::class, 'create'])->name('usuario.create');
Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');
Route::delete('/usuario/{usuario}', [UserController::class, 'destroy'])->name('usuario.destroy');
Route::get('/usuario/{usuario}', [UserController::class, 'show'])->name('usuario.show');
Route::get('/usuario/{usuario}/edit', [UserController::class, 'edit'])->name('usuario.edit');
Route::match(['PUT', 'PATCH'], '/usuario/{usuario}', [UserController::class, 'update'])->name('usuario.update');

//PEDIDOS
Route::get('/pedido', [\App\Http\Controllers\PedidoController::class, 'index'])->name('pedido.index');
Route::get('/pedido/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedido', [PedidoController::class, 'store'])->name('pedido.store');
Route::delete('/pedido/{pedido}', [PedidoController::class, 'destroy'])->name('pedido.destroy');
Route::get('/pedido/{pedido}', [PedidoController::class, 'show'])->name('pedido.show');
Route::get('/pedido/{pedido}/edit', [PedidoController::class, 'edit'])->name('pedido.edit');
Route::match(['PUT', 'PATCH'], '/pedido/{pedido}', [PedidoController::class, 'update'])->name('pedido.update');

//EMPLEADOS
Route::get('/empleado', [\App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleado.index');
Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
Route::post('/empleado', [EmpleadoController::class, 'store'])->name('empleado.store');
Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');
Route::get('/empleado/{empleado}', [EmpleadoController::class, 'show'])->name('empleado.show');
Route::get('/empleado/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleado.edit');
Route::match(['PUT', 'PATCH'], '/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('empleado.update');

//CATEGORIAS
Route::get('/categoria', [\App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/empleado/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::match(['PUT', 'PATCH'], '/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update');


//RUTA TEMPLATE
Route::get('/dashboard', function () {
    return view('dashboard');
});