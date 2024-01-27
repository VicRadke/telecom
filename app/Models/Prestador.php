<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;
    protected $table = 'prestadores';

    protected $primaryKey = 'id_prestador';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'tipo_identificacion',
        'id_prestador',
        'fecha_nacimineto',
        'genero',
        'estado_civil',
        'curp',
        'rfc',
        'lugar_nacimiento',
        'nacionalidad',
        'matricula',
        // domicilio //
        'calle',
        'numero_exterior' ,
        'numero_interior',
        'colonia',
        'codigo_postal' ,
        'entidad_federativa' ,
        'alcaldia_municipio' ,
        // modalidades //
        'modalidad',
        'turno',
        'es_migrante',
        'es_afrodescendiente',
        'es_lengua_indigena',
        'telefono',
        'celular',
        'correo',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido_paterno} {$this->apellido_materno}";
    }

    public function getSpanishBirthDateAttribute()
    {
        return date('d/m/Y', strtotime($this->fecha_nacimineto));
    }
}
