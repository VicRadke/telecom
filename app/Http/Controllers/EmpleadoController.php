<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
            return view('empleado.index')
                ->with([
                    'empleados' => Prestador::paginate(5)
                ]);

        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datosEmpleado = request()->(all);
        $datosEmpleado = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','Public');
        }
        
        Prestador::insert($datosEmpleado);

        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
     public function show(Prestador $empleado)
    {
        return view('empleado.show')->with([
            'empleado' =>  $empleado
        ]);
    }

    public function search()
    {
        return view('empleado.search');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestador $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestador $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestador $empleado)
    {
        //
    }
}
