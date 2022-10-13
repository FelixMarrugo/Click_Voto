<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class Cursos extends Controller
{
    // Consultar todos los cursos
    public function todos(){
        $curso = Curso::all();
        return $curso;
    }
}
