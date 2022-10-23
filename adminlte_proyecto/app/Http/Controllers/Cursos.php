<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Estudiante;

class Cursos extends Controller
{
    // Consultar todos los cursos
    public function todos(){
        $curso = Curso::all();
        return $curso;
    }

    public function curso_estudiante($id){
        $estudiante = Estudiante::FindOrFail($id);
        $curso = $estudiante->cursos->numero_curso;
        return $curso;
    }
}
