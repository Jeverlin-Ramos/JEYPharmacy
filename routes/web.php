<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Mail\FacturaMailable;
use Illuminate\Support\Facades\Mail;

Auth::routes();
Route::get('/', [App\Http\Controllers\ProductoController::class, 'mostrarProductos']);

//RUTA TEMPLATE
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('is_admin');

//Rutas productos
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('is_admin'); //panel administrador
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view'); //enseñar la vista de todos los productos
Route::get('/products-detail/{id}', [App\Http\Controllers\ProductoController::class, 'showDetail'])->name('productos-detail'); // enseñar la vista del detalle del producto
Route::match(['PUT', 'PATCH'], '/producto/{id}/add-quantity', [ProductoController::class, 'addQuantity'])->name('producto.add.quantity')->middleware('is_admin');

//Rutas usuarios
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('is_admin');

//Rutas pedidos


                                //Ruta pedidos usuario
Route::get('/todos-mis-pedidos', [\App\Http\Controllers\PedidoController::class, 'showPedidos'])->name('todos-mis-pedidos')->middleware('auth');
Route::get('/pedido/{id}/detalle', [App\Http\Controllers\PedidoController::class, 'showDetalle'])->name('pedido.detalle')->middleware('auth');


                                //Ruta pedidos empleados
Route::get('/despachar-pedido/{idPedido}/{idEmpleado}', [\App\Http\Controllers\PedidoController::class, 'despacharPedido'])->name('cambiar_estado_pedido')->middleware('is_employee');
Route::get('/empleados_pedidos', [\App\Http\Controllers\PedidoController::class, 'showPedidosForEmp'])->name('empleados_pedidos-mis-pedidos')->middleware('is_employee');
Route::get('/pedido/{id}/detalle_empleado', [PedidoController::class, 'showDetalleForEmp'])->name('pedido.detalle.empleados')->middleware('is_employee');

                                //Ruta pedidos administrador
Route::resource('pedidos', App\Http\Controllers\PedidoController::class)->middleware('is_admin');


//Rutas empleados
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('is_admin');

//Rutas Categorias
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('is_admin');

//Rutas del carrito
Route::get('/carrito/agregar-producto', [App\Http\Controllers\CarritoController::class, 'agregarProducto'])->name('carrito.agregar-producto')->middleware('auth');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar')->middleware('auth');
Route::post('/carrito/agregar-producto-con-cantidad', [App\Http\Controllers\CarritoController::class, 'agregarProductoConCantidad'])->name('carrito.agregar-producto-con-cantidad')->middleware('auth');
Route::put('/carrito/actualizar-cantidad/{detalleCarrito}', [App\Http\Controllers\CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizar-cantidad')->middleware('auth');
Route::delete('/carrito/eliminar-producto/{id}', [App\Http\Controllers\CarritoController::class, 'eliminarProducto'])->name('carrito.eliminar-producto')->middleware('auth');
Route::post('/carrito/realizar-pedido', [App\Http\Controllers\CarritoController::class, 'realizarPedido'])->name('carrito.realizar-pedido')->middleware('auth');
