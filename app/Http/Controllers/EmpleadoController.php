<?php

namespace App\Http\Controllers;

use App\Models\Modalidad;
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
                    'empleados' => Prestador::paginate(5),
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
            'domicilio' =>  $domicilio
        ]);
    }

    public function search()
    {
        $listEmployees = Prestador::paginate(5);
        return view('empleado.search')
            ->with([
                'employees' => $listEmployees
            ]);
    }

    public function do_search(Request $request)
    {
        $id_prestador = $request->input('id_prestador');
        $empleado = Prestador::where('id_prestador', $id_prestador)->first();
        if(!$empleado){
            return redirect()->route('empleado.search')->withErrors([
                'id_prestador' => 'No se encontró el empleado con el ID especificado.'
            ]);
        }
        return redirect()->route('empleado.show', $empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestador $empleado)
    {
        return view('empleado.edit')->with([
            'empleado' => $empleado
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestador $empleado)
    {
        $datosEmpleado = request()->except(['_token','_method']);
        $empleado->update($datosEmpleado);
        return redirect()
            ->route('empleado.show', $empleado)
            ->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestador $empleado)
    {
        
            $empleado->delete();
            return redirect()->route('empleado.index');
            // return "destroy no implementado";
      }
        
    }

