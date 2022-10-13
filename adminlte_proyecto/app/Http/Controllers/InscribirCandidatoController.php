<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscribirCandidatoController extends Controller
{
    //Mostrar vista
    public function view_inscribirCandidato(){
        return view('inscribirCandidatos');
    }
}
