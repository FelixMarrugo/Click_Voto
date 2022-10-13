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
        return view("estudiante", compact('lista_cursos'));
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
        
        $estudiante->save();
        return redirect()->route('estudiante')->with('mensaje', 'Estudiante Guadado correctamente');
    }
}
