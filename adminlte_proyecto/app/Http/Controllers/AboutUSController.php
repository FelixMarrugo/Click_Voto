<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUSController extends Controller
{
    //Metodos
    public function view_aboutus(){
        return view('about');
    }
}
