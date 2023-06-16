<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Models\DetallesPedido;
use App\Pedido;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PedidoController
 * @package App\Http\Controllers
 */
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('query');
        $pedidos = Pedido::where('Fecha_pedido', 'like', '%'.$search.'%')
        ->orWhereHas('user', function ($query) use ($search) {
            $query->where('name', 'like', '%'.$search.'%');
        })
        ->paginate();

        return view('pedido.index', compact('pedidos'))
            ->with('i', (request()->input('page', 1) - 1) * $pedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedido = new Pedido();
        return view('pedido.create', compact('pedido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pedido::$rules);

        $pedido = Pedido::create($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);

        return view('pedido.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);

        return view('pedido.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pedido $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        request()->validate(Pedido::$rules);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id)->delete();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido deleted successfully');
    }

    public function showPedidos()
    {
            // Obtenemos el usuario autenticado
            $user = Auth::user();

            // Obtenemos todos los pedidos realizados por el usuario
            $pedidos = Pedido::where('Id_usuario', $user->id)->get();

            // Retornamos la vista con los pedidos
            return view('pedidos_del_usuario', compact('pedidos'));
    }

    public function showDetalle($id)
    {
        $pedido = Pedido::find($id);
        
        $detalles = DetallesPedido::where('Id_pedido', $id)->get();
        
        return view('pedido_usuario', compact('pedido', 'detalles'));
    }

    
    public function showPedidosForEmp()
    {
            // Obtenemos el usuario autenticado
            $user = Auth::user();

            // Obtenemos todos los pedidos realizados por el usuario
            $pedidos = Pedido::where('Estado_pedido', 1)->orWhere('Estado_pedido', 2)->get();

            // Retornamos la vista con los pedidos
            return view('empleados_pedidos', compact('pedidos'));
    }
    
    public function showDetalleForEmp($id)
    {
        $Pedido = Pedido::find($id);
        $Pedido->Estado_pedido = 2; // Cambia el estado del pedido a 2
        $Pedido->save(); // Guarda los cambios en la base de datos

        $pedido = Pedido::find($id);
        $detalles = DetallesPedido::where('Id_pedido', $id)->get();
        $deliveries = Empleado::all();
        
        return view('detalle_pedido', compact('pedido', 'detalles', 'deliveries'));
    }
    public function onlyShowDetalleForEmp($id)
    {
        $pedido = Pedido::find($id);
        $detalles = DetallesPedido::where('Id_pedido', $id)->get();
        $deliveries = Empleado::all();
        
        return view('detalle_pedido', compact('pedido', 'detalles', 'deliveries'));
    }

    public function despacharPedido($idPedido, $idEmpleado)
    {
        $pedido = Pedido::findOrFail($idPedido);
        $pedido->Estado_pedido = 3;
        $pedido->id_empleado = $idEmpleado;
        $pedido->save();

        return redirect()->route('empleados_pedidos-mis-pedidos');
    }

    public function pedidoEntregado($idPedido)
    {
        $pedido = Pedido::findOrFail($idPedido);
        $pedido->Estado_pedido = 4;
        $pedido->save();

        return redirect()->route('todos-mis-pedidos');
    }

    public function pedidoCancelado($idPedido)
    {
        $pedido = Pedido::findOrFail($idPedido);
        $pedido->Estado_pedido = 5;
        $pedido->save();

        return redirect()->route('todos-mis-pedidos');
    }

    public function actualizarCantidadEmpleado(Request $request, $detallePedidoId)
    {
        $nuevaCantidad = $request->input('cantidad');

        if ($nuevaCantidad < 1) {
            return redirect()->back()->with('error', 'La cantidad debe ser mayor o igual a 1.');
        }
        $detallePedido = DetallesPedido::findOrFail($detallePedidoId);
        $detallePedido->Cantidad_producto_pedido = $nuevaCantidad;
        $detallePedido->save();
        return redirect()->back()->with('success', 'Cantidad actualizada correctamente.');
    }

    
    public function eliminarProducto($id, $idDetallePedido, $idPedido)
    {
        // Obtener el carrito actual del usuario para localizar el pedido
        $pedido = Pedido::where('Id_usuario', $id)->first();
    
        // Buscar el detalle del carrito con el ID de producto a eliminar
    $detalleEliminar = DetallesPedido::where('Id_pedido', $idPedido)
        ->where('Id_producto', $idDetallePedido)
        ->first();
    
        // Check if $detalleEliminar exists before attempting to delete
       if ($detalleEliminar) {
            // Eliminar el detalle del carrito
            $detalleEliminar->delete();
            return redirect()->route('pedido-view.empleados', $id)->with('success', 'El producto ha sido eliminado del carrito.');
        } else {
            // Handle the case when $detalleEliminar is null
            return redirect()->route('pedido-view.empleados', $id)->with('error', 'No se pudo encontrar el detalle del carrito para eliminar.');
        }// return $detalleEliminar;
    }

    public function productVw(Request $request, $idPedido)
    {
        $search = $request->input('search');
        $products = Producto::where('nombre', 'like', '%'.$search.'%')
                        ->orWhere('marca', 'like', '%'.$search.'%')
                        ->orWhereHas('categoria', function ($query) use ($search) {
                            $query->where('nombre', 'like', '%'.$search.'%');
                        })
                        ->get();
        
        return view('añadir_productos', compact('products', 'idPedido'));
    }

    public function agregarProducto($id_Pedido, $idProducto, $cantidad, $precio)
    {
        // Obtén el pedido actual
        $pedido = Pedido::findOrFail($id_Pedido);
    
        // Verifica si el producto ya existe en el pedido
       $detalleExistente = DetallesPedido::where('Id_pedido', $pedido->id)
            ->where('Id_producto', $idProducto)
            ->first();
    
        if ($detalleExistente) {
            // Actualiza la cantidad u otra información del detalle existente si es necesario
            $detalleExistente->cantidad_producto_pedido += $cantidad;
            $detalleExistente->save();
        } else {
            // Crea un nuevo detalle del pedido para el producto
            $nuevoDetalle = new DetallesPedido();
            $nuevoDetalle->Id_pedido = $pedido->id;
            $nuevoDetalle->Id_producto = $idProducto;
            $nuevoDetalle->cantidad_producto_pedido = $cantidad;
            $nuevoDetalle->precio_unitario = $precio;
            $nuevoDetalle->save();
        }
    
        return redirect()->route('pedido.detalle.empleados', ['id' => $pedido->id])->with('success', 'El producto ha sido añadido al carrito.');
    }    
    
    
    

}
