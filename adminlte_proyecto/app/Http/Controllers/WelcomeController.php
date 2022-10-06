<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Metodos
    public function view_welcome(){
        return view('welcome');
    }
}
