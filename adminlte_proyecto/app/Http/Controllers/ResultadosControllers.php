<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\votosEstudiante;

class ResultadosControllers extends Controller
{
    public function Mostrar_resultados(){
        $votos = votosEstudiante::where('candidatos_id', 1)->count();
        $objcandidatos = new CandidatoController;
        //Todos los candidatos
        $candidatos = $objcandidatos->todos();
        $array_votos = array();
        foreach ($candidatos as $value) {
            $votos = votosEstudiante::where('candidatos_id', $value->id)->count();
            $index = array($value->id, $votos);
            array_push($array_votos, $index );
           
        }

         //return $array_votos;

        
        return view('resultados', compact('candidatos', 'array_votos'));
    }
}
