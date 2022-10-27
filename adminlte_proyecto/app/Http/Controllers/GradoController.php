<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;

class GradoController extends Controller
{
    //Mostrar GRado de un estudiante
    public function gradoById($id)
    {
        $grado = Estudiante::FindOrFail($id);
        $numero_grado = $grado->cursos->grados->numero_grado;
        return $numero_grado;
    }
}
