<?php

namespace App\Http\Controllers;

use App\Models\DetallesPedido;
use App\Pedido;
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
    public function index()
    {
        $pedidos = Pedido::paginate();

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
            $pedidos = Pedido::where('Id_usuario', $user->id)->where('Estado_pedido', 1)->get();

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
        
        return view('detalle_pedido', compact('pedido', 'detalles'));
    }

    public function despacharPedido($idPedido, $idEmpleado)
    {
    $pedido = Pedido::findOrFail($idPedido);
    $pedido->Estado_pedido = 3;
    $pedido->id_empleado = $idEmpleado;
    $pedido->save();

    return redirect()->route('empleados_pedidos');
    }

}
