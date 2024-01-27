<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    const PADRE = 1;
    const MADRE = 2;
    const CONYUGE = 3;
    const CONTACTO_EMERGENCIA = 4;
    use HasFactory;
}
