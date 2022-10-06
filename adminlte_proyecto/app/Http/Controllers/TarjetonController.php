<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarjetonController extends Controller
{
    

    //Metodos
    public function view_design(){
        return view('tarjeton');
    }
}

