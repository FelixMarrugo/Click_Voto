<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Candidato;

class InscribirCandidatoController extends Controller
{
    
    //Mostrar vista
    public function view_inscribirCandidato($id){
       // $estudiante = Estudiante::FindOrFail($id);
        $cargo = "";
        $estudiante = new Estudiantes;
        $info = $estudiante->estudiante($id);

        $curso = new Cursos;
        $curso_estudiante = $curso->curso_estudiante($id);
        
        

        /*if(Candidato::where('estudiante_id', $id)){
            return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');
        }else{
            return view('inscribirCandidatos', compact('info', 'cargo'));
        }*/
        
        /*try {
            $can = Candidato::where('estudiante_id', '=', $id)->firstOrFail();
            return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');

          } catch(Exception $e) {
            return view('inscribirCandidatos', compact('info', 'cargo'));
            //return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');
            //echo "Unable to divide.";
          }*/
          $can = Candidato::select(['estudiante_id'])->where('estudiante_id', $id)->get(); //it is an object
          
          
          //return $can->estudiante_id;
            if(Candidato::select(['estudiante_id'])->where('estudiante_id', $id)->get() != '[]'){
                
                return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');

            }else{
                return view('inscribirCandidatos', compact('info', 'cargo'));
            }
          
        
    }

    public function inscribirCandidatoEstudiante($estudiante_id, $cargo_id, $tarjeton_id){
        //
    }
}
