<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';

    protected $fillable = [
        'id_modalidad',
        'id_prestador',
    ];

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class, 'id_modalidad', 'id');
    }
}
