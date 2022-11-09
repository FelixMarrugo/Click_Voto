<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FileControllers extends Controller
{
    //Guardar url de imagen
    public function store_file($url, $id){
        
        $file = new File;
        $file->url = $url;
        $file->candidatos_id = $id;
        $file->save();
        return true;
    }
}
