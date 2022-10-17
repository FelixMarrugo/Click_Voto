<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    //Mucho a uno con instituciones
    public function instituciones(){
        return $this->belongsTo(Institucion::class, 'institucions_id');
    }

    //Uno a muchos
    public function cursos(){
        return $this->hasMany(Curso::class, 'id');
    }
}
