<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestador extends Model
{
    use HasFactory;
    use SoftDeletes;
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
        'telefono',
        'celular',
        'correo',
        // // modalidades //
        // 'modalidad',
        // 'turno',
        // 'es_migrante',
        // 'es_afrodescendiente',
        // 'es_lengua_indigena',
        // 'telefono',
        // 'celular',
        // 'correo',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido_paterno} {$this->apellido_materno}";
    }

    public function getSpanishBirthDateAttribute()
    {
        return date('d/m/Y', strtotime($this->fecha_nacimineto));
    }

    public function domicilios()
    {
        return $this->hasMany(Domicilio::class, 'id_prestador', 'id_prestador');
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class, 'id_prestador', 'id_prestador')->latestOfMany();
    }

    public function referencias(){
        return $this->hasMany(Referencia::class, 'id_prestador', 'id_prestador');
    }

    public function solicitudes(){
        return $this->hasMany(Solicitud::class, 'id_prestador', 'id_prestador');
    }
    public function solicitud(){
        return $this->hasOne(Solicitud::class, 'id_prestador', 'id_prestador')->latestOfMany();
    }

    public function informacionesAcademicas(){
        return $this->hasMany(InformacionAcademicaPrestador::class, 'id_prestador', 'id_prestador');
    }

    public function informacionAcademica(){
        return $this->hasOne(InformacionAcademicaPrestador::class, 'id_prestador', 'id_prestador')->latestOfMany();
    }

    public function datosPadre(){
        return $this->referencias()->where('id_parentesco', Parentesco::PADRE)->first();
    }

    public function datosMadre(){
        return $this->referencias()->where('id_parentesco', Parentesco::MADRE)->first();
    }

    public function datosConyuge(){
        return $this->referencias()->where('id_parentesco', Parentesco::CONYUGE)->first();
    }

    public function datosContactoEmergencia(){
        return $this->referencias()->where('id_parentesco', Parentesco::CONTACTO_EMERGENCIA)->first();
    }

    public function datosReferenciasExtra(){
        return $this->referencias()->whereNull('id_parentesco')->get();
    }
}
