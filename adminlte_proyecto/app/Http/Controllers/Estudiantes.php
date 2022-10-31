<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
class Estudiantes extends Controller
{  
    //Retornar vista
    public function view_Estudiante(){
        $curso = new Cursos;
        $lista_cursos = $curso->todos();
        $estudiante =$this->todos();
        return view("estudiante", compact('lista_cursos', 'estudiante'));
    }

    public function guardar_estudiantes(Request $request){
        $estudiante = new Estudiante;
        $estudiante->identificacion = $request->input('identificacion');
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->cursos_id = $request->get('curso');
        
        if($request->input('estado') == ""){
            $estudiante->estado = "off";
        }else{
            $estudiante->estado = $request->input('estado');
        }
        $estudiante->voto = "no";
        $estudiante->save();
        return redirect()->route('estudiante')->with('mensaje', 'Estudiante Guadado correctamente');
    }

    public function todos(){
        $estudiante = Estudiante::all();
        return $estudiante;
    }

    public function estudiante($id){
        $estudiante = Estudiante::FindOrFail($id);
        return $estudiante;
    }

    public function voto($id){
       // $estudiante = new Estudiante;
        $estudiante = Estudiante::FindOrFail($id);
        $estudiante->voto = "si";
        $estudiante->save();
    }

}
