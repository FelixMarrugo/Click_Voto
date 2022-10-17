<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    //relaciones a nivel de eloquen
    public function estudiantes(){
        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }
}
