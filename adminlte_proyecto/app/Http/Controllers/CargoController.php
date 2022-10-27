<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Cargo;
class CargoController extends Controller
{
    //Enviar Cargo a la vista Inscribir candidatos
    public function cargo_estudiante($id){
        $cargo = Cargo::FindOrFail($id);
        //$cargo_estudiante = $cargo->nombre_cargo;
        return $cargo;
    }

    public function todos_cargos(){
        $cargo = Cargo::all(); 
        return $cargo;
    }

}
