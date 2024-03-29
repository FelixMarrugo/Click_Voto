<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //muchos a uno con la tabla grados
    public function grados(){
        return $this->belongsTo(Grado::class, 'grados_id');
    }

    //Relacion con la tabla estudiantes.
    public function estudiantes(){
        return $this->hasMany(Estudiante::class, 'id');
    }

    public function votos(){
        return this->hasMany(votoEstudiante::class, 'id');
    }

    public function votos_blancos(){
        return $this->hasMany(votos_blancos::class, 'id');
    }

    

}
