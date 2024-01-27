<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelAcademico extends Model
{
    const BACHILLERATO = 1;
    const LICENCIATURA = 2;
    const MAESTRIA = 3;
    const DOCTORADO = 4;
    const ESPECIALIDAD = 5;
    const PRIMARIA = 6;
    const SECUNDARIA = 7;
    use HasFactory;
}
