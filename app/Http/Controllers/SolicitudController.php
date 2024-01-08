<?php

//use App\Models\Solicitud;
namespace App\Http\Controllers;

use App\Models\Solicitud;

use Illuminate\Http\Request;


class SolicitudController extends Controller {
    public function index() {
        // Tu lógica para la acción "index" aquí
        
    }


    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'tipo_identificacion' => 'required',
            'id_prestador' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'estado_civil' => 'required',
            'curp' => 'required',
            'rfc' => 'required',
            'lugar_nacimiento' => 'required',
            'nacionalidad' => 'required',
            // domicilio
            'calle' => 'required',
            'numero_exterior' => 'required',
            'numero_interior' => 'required',
            'colonia' => 'required',
            'codigo_postal' => 'required',
            'entidad_federativa' => 'required',
            'alcaldia_municipio' => 'required',
            // modalidades
            'modalidad' => 'required',
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
        // TODO: guardar registro en la BD.
        // TODO: Avisar en el front si fue exitoso o no.
        return redirect()->route('dashboard')->with('success', 'Solicitud creada exitosamente');
    }
}