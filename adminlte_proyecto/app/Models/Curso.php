<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //muchos a uno con la tabla grados
    public function grados(){
        return $this->belongsTo(Curso::class, 'grado_id');
    }

    //Relacion con la tabla estudiantes.
    public function estudiantes(){
        return $this->hasMany(Estudiante::class, 'id');
    }

}
