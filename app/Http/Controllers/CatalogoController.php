<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Modalidad;
use Illuminate\Http\Request;

class CatalogoController extends Controller


{
    public function index(){
        return view('catalogos');

        
    }
    public function store(Request $request) {
        $validatedData = $this->validate($request, [
            'nombre_modalidad' => 'required',
            'nivel_modalidad' => 'required',
            'horas_por_periodo' => 'required',
            'horas_por_dia' => 'required',
            'horas_por_semana' => 'required',
            'horas_por_mes' => 'required',
            'duracion' => 'required',
            'Horas_por_semana' => 'required',
            'pago_por_mes' => 'required',
            //nivel de estudio 
            'descripcion' => 'required',
            //programas
            'nombre_programa' => 'required',
            'clave_programa' => 'required',
            'vigencia' => 'required',
            'cupo' => 'required',
            //instituciones
            'nombre_institucion' => 'required',
            'escuela' => 'required',
            //carreras
            'nombre_carrera' => 'required',
            
        ]);
        
        
        $prestador = new Modalidad($validatedData);
        $prestador->save();
       
        return redirect()->route('dashboard.index')->with('success', 'Catalogo creado exitosamente');
    }
}
    

