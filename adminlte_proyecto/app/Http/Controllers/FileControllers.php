<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FileControllers extends Controller
{
    //Guardar url de imagen
    public function store_file(Request $request, $id){
        $request->validate([
            'file' => 'image|max:5120'
        ]);
        $imagen =  $request->file('file')->store('public/Img_Estudiantes');
        $url = Storage::url($imagen);

        $file = new File;
        $file->url = $url;
        $file->candidatos_id = $id;
        $file->save();
       
        return redirect()->route('estudiante')->with('mensaje', 'Imagen Guarda correctamente');
    }
}
