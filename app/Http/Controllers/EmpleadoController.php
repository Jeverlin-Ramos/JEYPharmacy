<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = new Empleado();
        return view('empleado.create', compact('empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Imagen' => 'required|image|max:2048',
            'Nombre' => 'required',
            'Numero_tel' => 'required|regex:/\d{3}-\d{3}-\d{4}/',
            'Email' => 'required|email',
            'Direccion' => 'required'
        ]);
    
    // Obtener el archivo del formulario
    $file = $request->file('Imagen');

    // Generar un nombre único para el archivo
    $filename = uniqid() . '.' . $file->getClientOriginalExtension();

    // Mover el archivo al directorio de almacenamiento deseado
    $file->storeAs('public/employees', $filename);

    // Obtener la URL del archivo almacenado
    $imageUrl = Storage::url('public/employees/' . $filename);
    
        $empleado = Empleado::create([
            'Imagen' => $filename,
            'Nombre' => $request->input('Nombre'),
            'Numero_tel' => $request->input('Numero_tel'),
            'Email' => $request->input('Email'),
            'Direccion' => $request->input('Direccion')
        ]);

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'imagen' => 'nullable|image|max:2048',
            'nombre' => 'required',
            'numero_tel' => 'required|regex:/\d{3}-\d{3}-\d{4}/',
            'email' => 'required|email',
            'direccion' => 'required'
        ]);
    
        $empleado = Empleado::find($id);
    
        // Obtener el archivo del formulario
        $file = $request->file('Imagen');
    
        // Generar un nombre único para el archivo
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
    
        // Mover el archivo al directorio de almacenamiento deseado
        $file->storeAs('public/employees', $filename);
    
        // Eliminar la imagen anterior si existe
        if ($empleado->Imagen) {
            Storage::delete('public/employees/' . $empleado->Imagen);
        }
    
        $empleado->Imagen = $filename;
        $empleado->Nombre = $request->input('Nombre');
        $empleado->Numero_tel = $request->input('Numero_tel');
        $empleado->Email = $request->input('Email');
        $empleado->D = $request->input('Direccion');
        $empleado->save();
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        // Elimina la imagen del storage si existe
        if ($empleado->Imagen) {
            Storage::delete('public/employees/' . $empleado->Imagen);
        }
        $empleado->delete();
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado deleted successfully');
    }
}
