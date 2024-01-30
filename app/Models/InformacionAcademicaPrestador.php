<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionAcademicaPrestador extends Model
{
    use HasFactory;

    protected $table = 'informacion_academica_prestadors';
    protected $fillable = [
        'id_prestador',
        'id_nivel_academico',
        'nombre_institucion',
        'carrera',
        'periodo_escolar',
    ];

    public function nivelAcademico()
    {
        return $this->belongsTo(NivelAcademico::class, 'id_nivel_academico');
    }
}
