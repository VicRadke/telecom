<?php

//use App\Models\Solicitud;
namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Models\InformacionAcademicaPrestador;
use App\Models\Parentesco;
use App\Models\Prestador;
use App\Models\Referencia;
use App\Models\Solicitud;
use Illuminate\Console\View\Components\Info;
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
            'matricula' => 'required|numeric|unique:prestadores,matricula',
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
            'telefono_padre' => 'required',
            'nombre_madre' => 'required',
            'domicilio_madre' => 'required',
            'telefono_madre' => 'required',
            'nombre_conyuge' => 'required',
            'domicilio_conyugue' => 'required',
            'telefono_conyuge' => 'required',
            // contacto de emergencia
            'nombre_contacto_emergencia' => 'required',
            'telefono_celular_contacto_emergencia' => 'nullable',
            'telefono_contacto_emergencia' => 'nullable',
            // informacion academica
            'id_nivel_academico' => 'required',
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
            $referenciaPadre = new Referencia();
            $referenciaPadre->nombre_referencia_personal = $validatedData['nombre_padre'];
            $referenciaPadre->direccion_referencia_personal = $validatedData['domicilio_padre'];
            $referenciaPadre->telefono_referencia_personal = $validatedData['telefono_padre'];
            $referenciaPadre->id_parentesco = Parentesco::PADRE;
            $referenciaPadre->id_prestador = $prestador->id_prestador;
            $referenciaPadre->save();
            $referenciaMadre = new Referencia();
            $referenciaMadre->nombre_referencia_personal = $validatedData['nombre_madre'];
            $referenciaMadre->direccion_referencia_personal = $validatedData['domicilio_madre'];
            $referenciaMadre->telefono_referencia_personal = $validatedData['telefono_madre'];
            $referenciaMadre->id_parentesco = Parentesco::MADRE;
            $referenciaMadre->id_prestador = $prestador->id_prestador;
            $referenciaMadre->save();
            $referenciaConyuge = new Referencia();
            $referenciaConyuge->nombre_referencia_personal = $validatedData['nombre_conyuge'];
            $referenciaConyuge->direccion_referencia_personal = $validatedData['domicilio_conyugue'];
            $referenciaConyuge->telefono_referencia_personal = $validatedData['telefono_conyuge'];
            $referenciaConyuge->id_parentesco = Parentesco::CONYUGE;
            $referenciaConyuge->id_prestador = $prestador->id_prestador;
            $referenciaConyuge->save();
            $referenciaPersonal = new Referencia();
            $referenciaPersonal->nombre_referencia_personal = $validatedData['nombre_referencia_personal'];
            $referenciaPersonal->direccion_referencia_personal = $validatedData['direccion_referencia_personal'];
            $referenciaPersonal->telefono_referencia_personal = $validatedData['telefono_referencia_personal'];
            $referenciaPersonal->id_prestador = $prestador->id_prestador;
            $referenciaPersonal->save();
            $referenciaPersonal2 = new Referencia();
            $referenciaPersonal2->nombre_referencia_personal = $validatedData['nombre_referencia_personal_2'];
            $referenciaPersonal2->direccion_referencia_personal = $validatedData['direccion_referencia_personal_2'];
            $referenciaPersonal2->telefono_referencia_personal = $validatedData['telefono_referencia_personal_2'];
            $referenciaPersonal2->id_prestador = $prestador->id_prestador;
            $referenciaPersonal2->save();
            $contactoEmergencia = new Referencia();
            $contactoEmergencia->nombre_referencia_personal = $validatedData['nombre_contacto_emergencia'];
            $contactoEmergencia->telefono_referencia_personal = $validatedData['telefono_contacto_emergencia'];
            // $contactoEmergencia->telefono_otro_referencia_personal = $validatedData['telefono_celular_contacto_emergencia'];
            $contactoEmergencia->id_parentesco = Parentesco::CONTACTO_EMERGENCIA;
            $contactoEmergencia->id_prestador = $prestador->id_prestador;
            $contactoEmergencia->save();
            $informacionAcademica = new InformacionAcademicaPrestador($validatedData);
            $informacionAcademica->id_prestador = $prestador->id_prestador;
            $informacionAcademica->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        
        // TODO: Subir todo el form y en el dit tambien lo editado 
        // TODO: Avisar en el front si fue exitoso o no.
        return redirect()->route('dashboard.index')->with('success', 'Solicitud creada exitosamente');
    }
}