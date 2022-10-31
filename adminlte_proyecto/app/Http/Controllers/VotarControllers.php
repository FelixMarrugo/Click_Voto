<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\votosEstudiante;

class VotarControllers extends Controller
{
    public function view_votar(){
        return view("votar");
    }

    public function validar(Request $request){
        $identificacion = $request->input('identificacion');
        if (!is_numeric($identificacion)){
            return redirect()->route('votar_estudiante')->with('mensaje', 'La identificacion no es numerica');
        }

        $info_votante = Estudiante::select(['id', 'identificacion'])->where('identificacion', $identificacion)->get();
        if($info_votante != '[]'){
            $id = $info_votante [0]['id'];
        }else{
            return redirect()->route('votar_estudiante')->with('mensaje', 'Esta indentificacion no esta registrada');
        }

        $validar_voto = Estudiante::select(['voto'])->where('voto', 'si')->where('identificacion', $identificacion)->get();
        if( $validar_voto != '[]'){
            return redirect()->route('votar_estudiante')->with('mensaje', 'Ya se encuentra registrado su voto');
        }

        $objestudiante = new Estudiantes;
        $estudiante = $objestudiante->estudiante($id); //Toda la informacion del estudiante
        //que esta votando

        $curso_id = $estudiante->cursos->id; //Curso del votante

        $grado = $estudiante->cursos->grados->numero_grado;
        
        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->todos(); //Toda la info de los candidatos
        
        return view('eleccion', compact('candidatos', 'grado', 'id', 'curso_id'));
    }

    public function registrar_voto(Request $request){
        $id = $request->id; // id del votante
        $candidato_id = $request->candidato_id;
        $curso = $request->curso; //Curso del votante

        $voto = new votosEstudiante;
        $voto->candidatos_id = $candidato_id;
        $voto->cursos_id = $curso;
        $voto->save();

        $estudiante = new Estudiantes;
        $estudiante->voto($id);

        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->getById($candidato_id); 
        $cargo = $candidatos->cargos->nombre_cargo;

        //Otra eleccion
        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->todos();  //este

        $objestudiante = new Estudiantes;
        $estudiante = $objestudiante->estudiante($id);
        $grado = $estudiante->cursos->grados->numero_grado; //este
        $curso_id = $estudiante->cursos->id; //este*/
        
        if($cargo == 'Representante Estudiantil'){
            return view('eleccion_personero', compact('candidatos', 'grado', 'id', 'curso_id'));
        }elseif($cargo == 'Personeria'){
            return view('eleccion_contralor', compact('candidatos', 'grado', 'id', 'curso_id')); 
        }else{
            return view('votar');
        }
       
    }

}
