<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionAcademicaPrestador extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_prestador',
        'id_nivel_academico',
        'nombre_institucion',
        'carrera',
        'periodo_escolar',
    ];
}
