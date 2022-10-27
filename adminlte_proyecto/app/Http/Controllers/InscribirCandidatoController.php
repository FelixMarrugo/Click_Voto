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

        $grado = new GradoController;
        $numero_grado = $grado->gradoById($id);
        
        $curso = new Cursos;
        $curso_estudiante = $curso->curso_estudiante($id);
        
        $cargo = new CargoController;
        //$cargo_estudiante = $cargo->todos_cargos();

        $can = Candidato::select(['estudiante_id'])->where('estudiante_id', $id)->get();
        
        if($can != '[]'){
            
            return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');

        }else{

            if($numero_grado != "11" and $numero_grado != "10"){
                $cargo_estudiante_representante = $cargo->cargo_estudiante(1);
              // return $cargo_estudiante->id;
               return view('inscribirCandidatos', compact('info', 'cargo_estudiante_representante'));
            }else{
                
                return "<h1> estamos trabajando..!</h1>";
            }

            

        }
          
        
    }

    public function inscribirCandidatoEstudiante($estudiante_id, $cargo_id, $tarjeton_id){
        //
    }
}
