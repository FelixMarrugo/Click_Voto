<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    //Retornar vista
    public function view_Estudiante()
    {
        $curso = new Cursos;
        $lista_cursos = $curso->todos();
        $estudiante = $this->todos();
        return view("estudiante", compact('lista_cursos', 'estudiante'));
    }

    public function guardar_estudiantes(Request $request)
    {
        $estudiante = new Estudiante;
        $identificacion = $request->input('identificacion');
        //return gettype($identificacion);
        $estudiante_existe = $this->identificacion_estudiante($identificacion);
        if ($estudiante_existe == '[]') {
            $estudiante->identificacion = $request->input('identificacion');
            $estudiante->nombre = $request->input('nombre');
            $estudiante->apellido = $request->input('apellido');
            $estudiante->cursos_id = $request->get('curso');

            if ($request->input('estado') == "") {
                $estudiante->estado = "off";
            } else {
                $estudiante->estado = $request->input('estado');
            }
            $estudiante->voto_representante = "no";
            $estudiante->voto_personeria = "no";
            $estudiante->voto_contraloria = "no";
            $estudiante->save();
            return redirect()->route('estudiante')->with('mensaje', 'ok');
        }else{
            return redirect()->route('estudiante')->with('mensaje', 'registrado');
        }
    }

    public function todos()
    {
        $estudiante = Estudiante::all();
        return $estudiante;
    }

    public function estudiante($id)
    {
        $estudiante = Estudiante::FindOrFail($id);
        return $estudiante;
    }


    public function identificacion_estudiante($identificacion)
    {
        $estudiante = Estudiante::where('identificacion', $identificacion)->get();
        return $estudiante;
    }
}
