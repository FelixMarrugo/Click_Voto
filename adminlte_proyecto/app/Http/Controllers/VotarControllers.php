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
        //Validaciones 
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

        $voto_representante = Estudiante::select(['voto_representante'])->where('voto_representante', 'si')->where('identificacion', $identificacion)->get();
        $voto_personeria = Estudiante::select(['voto_personeria'])->where('voto_personeria', 'si')->where('identificacion', $identificacion)->get();
        $voto_contraloria = Estudiante::select(['voto_contraloria'])->where('voto_contraloria', 'si')->where('identificacion', $identificacion)->get();
        $vr = false;
        $vp = false;
        $vc = false;
        if( $voto_representante != '[]'){
            $vr = true;
        } 

        if ($voto_personeria != '[]') {
            $vp = true;
        }

        if ($voto_contraloria != '[]') {
            $vc = true;
        }
        if($vr == true && $vp == true && $vc == true){
            return redirect()->route('votar_estudiante')->with('mensaje', 'Ya se encuentra registrado su voto');
        }
       
        //---------------------------------------------------------------------------


        $objestudiante = new Estudiantes;
        $estudiante = $objestudiante->estudiante($id); //Toda la informacion del estudiante
        //que esta votando

        $curso_id = $estudiante->cursos->id; //Curso del votante
        $grado = $estudiante->cursos->grados->numero_grado; //Grado del votante
        $nombre = $estudiante->nombre." ".$estudiante->apellido; //Nombre del votante

        
        
        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->todos(); //Toda la info de los candidatos
        
        $objfile = new FileControllers;
        $info_file = $objfile->todos();
        return view('eleccion', compact('candidatos', 'grado', 'id', 'curso_id', 'info_file', 'nombre'));
    }

    public function registrar_voto(Request $request){
        //Objeto del estudiante
        $estudiante = new Estudiantes;
        $nombre = $request->nombre;

        $id = $request->id; // id del votante
        /*$candidato_id = $request->candidato_id; //id del candidato
        $curso = $request->curso; //Curso del votante

        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->getById($candidato_id);*/ 
        //$cargo = $candidatos->cargos->nombre_cargo;
        //return $cargo;
        //return $id;
        $info_votante = $estudiante->estudiante($id);
        $identificacion = $info_votante->identificacion;
        //$nombre = $info_votante->nombre." ".$info_votante->apellido; // Nombre dek votante

        $voto_representante = Estudiante::select(['voto_representante'])->where('voto_representante', 'si')->where('identificacion', $identificacion)->get();
        $voto_personeria = Estudiante::select(['voto_personeria'])->where('voto_personeria', 'si')->where('identificacion', $identificacion)->get();
        $voto_contraloria = Estudiante::select(['voto_contraloria'])->where('voto_contraloria', 'si')->where('identificacion', $identificacion)->get();
        $vr = false;
        $vp = false;
        $vc = false;

        if( $voto_representante != '[]'){
            $vr = true;
        } 

        if ($voto_personeria != '[]') {
            $vp = true;
        }

        if ($voto_contraloria != '[]') {
            $vc = true;
        }
        //return $vp;
        if($nombre == 'Voto en blanco'){
            $candidato_id = $request->candidato_id;
            $curso_id = $request->curso;
            $objcandidatos = new CandidatoController;
            $candidatos = $objcandidatos->getById($candidato_id);
            $cargo = $candidatos->cargos->nombre_cargo;

            //return "Pilas";
            if($cargo == 'Representante Estudiantil' && $vr == false){
                //$this->voto_representante($id);
                //return "Pilas representante";
                $this->voto_blanco($curso_id);
            } elseif ($cargo == 'Personeria' && $vp == false) {
                //$this->voto_personeria($id);
                return "Pilas Personero";
                $this->voto_blanco($curso_id);
            }elseif($cargo == 'Contraloria' && $vc == false){
                //$this->voto_contraloria($id);
                $this->voto_blanco($curso_id);
            }
        }
            //Objeto del estudiante
            $estudiante = new Estudiantes;


            $id = $request->id; // id del votante
            $candidato_id = $request->candidato_id; //id del candidato
            $curso = $request->curso; //Curso del votante

            $objcandidatos = new CandidatoController;
            $candidatos = $objcandidatos->getById($candidato_id); 
            $cargo = $candidatos->cargos->nombre_cargo;
            
            $info_votante = $estudiante->estudiante($id);
            $identificacion = $info_votante->identificacion;
            $nombre = $info_votante->nombre." ".$info_votante->apellido; // Nombre dek votante
            //return $nombre;
            //return $identificacion;
            $voto_representante = Estudiante::select(['voto_representante'])->where('voto_representante', 'si')->where('identificacion', $identificacion)->get();
            $voto_personeria = Estudiante::select(['voto_personeria'])->where('voto_personeria', 'si')->where('identificacion', $identificacion)->get();
            $voto_contraloria = Estudiante::select(['voto_contraloria'])->where('voto_contraloria', 'si')->where('identificacion', $identificacion)->get();
            $vr = false;
            $vp = false;
            $vc = false;

            if( $voto_representante != '[]'){
                $vr = true;
            } 

            if ($voto_personeria != '[]') {
                $vp = true;
            }

            if ($voto_contraloria != '[]') {
                $vc = true;
            }

            if($cargo == 'Representante Estudiantil' && $vr == false){
                $this->voto_representante($id);
                $voto = new votosEstudiante;
                $voto->candidatos_id = $candidato_id;
                $voto->cursos_id = $curso;
                $voto->save();
            } elseif ($cargo == 'Personeria' && $vp == false) {
                $this->voto_personeria($id);
                $voto = new votosEstudiante;
                $voto->candidatos_id = $candidato_id;
                $voto->cursos_id = $curso;
                $voto->save();
            }elseif($cargo == 'Contraloria' && $vc == false){
                $this->voto_contraloria($id);
                $voto = new votosEstudiante;
                $voto->candidatos_id = $candidato_id;
                $voto->cursos_id = $curso;
                $voto->save();
            }

    
        
        /*//$objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->getById($candidato_id); 
        $cargo = $candidatos->cargos->nombre_cargo;*/
        //Otra eleccion
        $objcandidatos = new CandidatoController;
        $candidatos = $objcandidatos->todos();  //este

        $objestudiante = new Estudiantes;
        $estudiante = $objestudiante->estudiante($id);
        $grado = $estudiante->cursos->grados->numero_grado; //este
        $curso_id = $estudiante->cursos->id; //este*/
        
        

        $objfile = new FileControllers;
        $info_file = $objfile->todos();

        if($cargo == 'Representante Estudiantil'){
            return view('eleccion_personero', compact('candidatos', 'grado', 'id', 'curso_id', 'info_file', 'nombre'));
        }elseif($cargo == 'Personeria'){
            return view('eleccion_contralor', compact('candidatos', 'grado', 'id', 'curso_id', 'info_file', 'nombre')); 
        }else{
            return view('gracias');
            //return view('votar');
        }
       
    }

    public function voto_representante($id)
    {
        $estudiante = Estudiante::FindOrFail($id);
        $estudiante->voto_representante = "si";
        $estudiante->save();
    }

    public function voto_personeria($id)
    {
        $estudiante = Estudiante::FindOrFail($id);
        $estudiante->voto_personeria = "si";
        $estudiante->save();
    }

    public function voto_contraloria($id)
    {
        $estudiante = Estudiante::FindOrFail($id);
        $estudiante->voto_contraloria = "si";
        $estudiante->save();
    }

    public function voto_blanco($curso_id)
    {
        return "aqui estoy";
        $voto = new Votos_blanco;
        $voto->cursos_id = $curso_id;
        $voto->save();
    }
}