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

    public function tarjetones(){
        return $this->belongsTo(Tarjeton::class, 'tarjeton_id');
    }

    public function cargos(){
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    public function votos(){
        return this->hasMany(VotoEstudiante::class, 'id');
    }
}
