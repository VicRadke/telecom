<?php

//use App\Models\Solicitud;
namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Models\Prestador;
use App\Models\Solicitud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller {
    public function index() {
        // Tu lógica para la acción "index" aquí
        
    }


    public function store(Request $request) {
        $validatedData = $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'tipo_identificacion' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'estado_civil' => 'required',
            'curp' => 'required',
            'rfc' => 'required',
            'lugar_nacimiento' => 'required',
            'nacionalidad' => 'required',
            'matricula' => 'required|numeric',
            // domicilio
            'calle' => 'required',
            'numero_exterior' => 'required',
            'numero_interior' => 'required',
            'colonia' => 'required',
            'codigo_postal' => 'required',
            'entidad_federativa' => 'required',
            'alcaldia_municipio' => 'required',
            // modalidades
            'id_modalidad' => 'required',
            'turno' => 'required',
            'es_migrante' => 'required',
            //'especifica_migrante' => 'optional',
            'es_afrodescendiente' => 'required',
            //'especifica_afrodescendiente' => 'optional',
            'es_lengua_indigena' => 'required',
            //'especifica_lengua_indigena' => 'optional',
            // contacto
            'telefono' => 'required',
            'celular' => 'required',
            'correo' => 'required',
            // datos familiares
            'nombre_padre' => 'required',
            'domicilio_padre' => 'required',
            'nombre_madre' => 'required',
            'domicilio_madre' => 'required',
            'nombre_conyuge' => 'required',
            'domicilio_conyugue' => 'required',
            // contacto de emergencia
            'nombre_contacto_emergencia' => 'required',
            //'telefono_celular_contacto_emergencia' => 'optional',
            //'telefono_otro_contacto_emergencia' => 'optional',
            // informacion academica
            'nivel_academico' => 'required',
            'nombre_institucion' => 'required',
            'carrera' => 'required',
            'periodo_escolar' => 'required',
            // referencias personales, arreglo
            'nombre_referencia_personal' => 'required',
            'direccion_referencia_personal' => 'required',
            'telefono_referencia_personal' => 'required',
            'nombre_referencia_personal_2' => 'required',
            'direccion_referencia_personal_2' => 'required',
            'telefono_referencia_personal_2' => 'required',
        ]);

        DB::beginTransaction();
        try {
            // cambiamos fecha_nacimiento a fecha_nacimineto
            $validatedData['fecha_nacimineto'] = $validatedData['fecha_nacimiento'];
            
            $prestador = new Prestador($validatedData);
            $prestador->save();
            $validatedData['id_prestador'] = $prestador->id_prestador;
            $domicilio = new Domicilio($validatedData);
            $domicilio->save();
            $solicitud = new Solicitud($validatedData);
            $solicitud['id_prestador'] = $prestador->id_prestador;
            $solicitud->save();
            DB::commit();
            exit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        
        // TODO: Subir todo el form y en el dit tambien lo editado 
        // TODO: Avisar en el front si fue exitoso o no.
        return redirect()->route('dashboard.index')->with('success', 'Solicitud creada exitosamente');
    }
}