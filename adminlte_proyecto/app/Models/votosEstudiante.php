<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votosEstudiante extends Model
{
    use HasFactory;

    public function candidatos(){
        return $this->belongsTo(Candidato::class, 'candidatos_id');
    }

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursos_id');
    }
}
