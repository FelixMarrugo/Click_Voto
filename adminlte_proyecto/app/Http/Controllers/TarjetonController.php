<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarjetonController extends Controller
{
    

    //Metodos
    public function view_design(){
        return view('tarjeton');
    }

    public function asignar_tarjeton($numero_grado, $cargo){
         //Validar el tarjeton
         if($numero_grado == "3"){
            $tarjeton = 1;
        }elseif ($numero_grado == "4") {
            $tarjeton = 2;
        }elseif ($numero_grado == "5") {
            $tarjeton = 3;
        }elseif ($numero_grado == "6") {
            $tarjeton = 4;
        }elseif ($numero_grado == "7") {
            $tarjeton = 5;
        }elseif ($numero_grado == "8") {
            $tarjeton = 6;
        }elseif ($numero_grado == "9") {
            $tarjeton = 7;
        }elseif ($numero_grado == "10") {
            if($cargo == 1){
                $tarjeton = 8;
            }else{
                $tarjeton = 10;
            }
            
        }elseif ($numero_grado == "11") {
            
            if($cargo == 1){
                $tarjeton = 9;
            }else{
                $tarjeton = 11;
            }
        }

        return $tarjeton;
    }
}

