<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    //Relacion con la tabla estudiante
    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursos_id');
    }

    public function candidatos(){
        return $this->hasOne(candidatos::class, 'id');
    }
}
