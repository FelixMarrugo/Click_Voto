<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotarControllers extends Controller
{
    public function view_votar(){
        return view("votar");
    }

    public function validar(Request $request){
        $identificacion = $request->input('identificacion');
        if (!is_numeric($identificacion)){
            return redirect()->route('Registrar_Voto_Estudiante')->with('mensaje', 'La identificacion no es numerica');
        }
    }
}
