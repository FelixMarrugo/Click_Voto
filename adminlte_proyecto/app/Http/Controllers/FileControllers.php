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

        /*
            1. Terminar de crear el metodo en inscribir candidatos
            2. Hacer las validaciones con los tarjetones y 
            mostrar en la vista inscribir candidatos, el cargo. Validar si es estudinte o no
            3. Crear el nuevo objeto y guardar el candidato, luego la imagen. 
            
        */



        $file = new File;
        $file->url = $url;
        $file->candidatos_id = $id;
        $file->save();
       
        return redirect()->route('estudiante')->with('mensaje', 'Imagen Guarda correctamente');
    }
}
