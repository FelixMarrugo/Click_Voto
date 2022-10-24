<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Candidato;
use App\Models\Cargo;

class InscribirCandidatoController extends Controller
{
    
    //Mostrar vista
    public function view_inscribirCandidato($id){
       // $estudiante = Estudiante::FindOrFail($id);
        $estudiante = new Estudiantes;
        $info = $estudiante->estudiante($id);

        $curso = new Cursos;
        $curso_estudiante = $curso->curso_estudiante($id);

        $cargo = new CargoController;
        $cargo_estudiante = $cargo->todos_cargos();

        $can = Candidato::select(['estudiante_id'])->where('estudiante_id', $id)->get();
        
        if($can != '[]'){
            
            return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');

        }else{

            /*if($curso_estudiante = "11-01"){
                $cardo = array("Representante", "Personero");
            }*/
            return view('inscribirCandidatos', compact('info', 'cargo_estudiante'));


        }
          
        
    }

    public function inscribirCandidatoEstudiante($estudiante_id, $cargo_id, $tarjeton_id){
        //
    }
}
