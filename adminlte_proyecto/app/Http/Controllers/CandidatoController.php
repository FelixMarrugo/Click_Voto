<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Candidato;
use App\Models\Cargo;
use App\Models\file;

use Illuminate\Support\Facades\Storage;

class CandidatoController extends Controller
{
    
    //Mostrar vista
    public function view_inscribirCandidato($id){
       // $estudiante = Estudiante::FindOrFail($id);
        $estudiante = new Estudiantes;
        $info = $estudiante->estudiante($id);

        $grado = new GradoController;
        $numero_grado = $grado->gradoById($id);
        
        $curso = new Cursos;
        $curso_estudiante = $curso->curso_estudiante($id);
        
        $cargo = new CargoController;
        //$cargo_estudiante = $cargo->todos_cargos();

        //Organizar mejor, asignar una nueva responsabilidad
        $can = Candidato::select(['estudiante_id'])->where('estudiante_id', $id)->get();
       
        
       //return $can[0]["estudiante_id"];
        if($can != '[]'){
  
            return redirect()->route('estudiante')->with('candidato', 'El candidato ya existe, seleccione otro');

        }else{

            if($numero_grado != "11" and $numero_grado != "10"){
                $info_candidatos = $this->todos();
                foreach ($info_candidatos as $value) {
                    if($value->estudiantes->cursos->numero_curso == $curso_estudiante ){
                         return redirect()->route('estudiante')->with('candidato_null', 'El curso ya tiene un Canditado');
                    }
                }
                $cargo_estudiante_representante = $cargo->cargo_estudiante(1);
              // return $cargo_estudiante->id;
               return view('inscribirCandidatos', compact('info', 'cargo_estudiante_representante'));
            }else{
                if($numero_grado == "11"){
                    $cargo_estudiante_representante1 = $cargo->cargo_estudiante(1);
                    $cargo_estudiante_representante2 = $cargo->cargo_estudiante(2);
                    //return $cargo_estudiante_representante2->id;
                    
                }else{
                    $cargo_estudiante_representante1 = $cargo->cargo_estudiante(1);
                    $cargo_estudiante_representante2 = $cargo->cargo_estudiante(3);
                    //return view('inscribirCandidatos', compact('info', 'cargo_estudiante_representante1', 'cargo_estudiante_representante2'));
                }
                return view('inscribirCandidatos', compact('info', 'cargo_estudiante_representante1', 'cargo_estudiante_representante2'));
            }

        }
          
    }

    public function inscribirCandidatoEstudiante(Request $request){
       
        //Verificar si es una foto
        $request->validate([
            'file' => 'image|max:5120'
        ]);
       
        //return $request->file('file');
        $estudiante = new Estudiantes;
        $id = $request->input('id');
        //return $id;
        $est = $estudiante->estudiante($request->input('id'));
        $cargo = $request->get('cargo');
        $numero_grado = $est->cursos->grados->numero_grado;
        $numero_curso = $est->cursos->numero_curso;
        
        $info_candidatos = $this->todos();
        foreach ($info_candidatos as $value) {
            if($value->estudiantes->cursos->numero_curso == $numero_curso and $cargo == $value->cargo_id){
                    return redirect()->route('estudiante')->with('Candidato_null', 'El curso ya tiene un Canditado a este cargo');
            }
        }

        //Se evidencia Fabricacion pura
        $tarjeton = new TarjetonController;
        $tarjeton_id = $tarjeton->asignar_tarjeton($numero_grado, $cargo);

        $this->guardar_candidato($id, $cargo, $tarjeton_id);
        $candidato = $this->candidato_id($id);
        $candidato_id = $candidato[0]['id'];

        if($request->file('file') != ""){
            

            $imagen =  $request->file('file')->store('public/Img_Estudiantes');
            $url = Storage::url($imagen);

            $objimagen = new FileControllers;
            //return gettype($url); //$url;
            $imagen = $objimagen->store_file($url, $candidato_id);
        }else{
            $url = "/storage/Img_Estudiantes/sin_foto.jpg";
            $objimagen = new FileControllers;
            $imagen = $objimagen->store_file($url, $candidato_id);
        }
        
        return redirect()->route('estudiante')->with('candidato_inscrito', 'ok');
    }

    public function guardar_candidato($id, $cargo, $tarjeton_id){
        //Guardar candidato
       $candidato = new Candidato;
       $candidato->estudiante_id = $id;
       $candidato->cargo_id = $cargo;
       $candidato->tarjeton_id = $tarjeton_id;
       $candidato->save();
    }

    public function lista_candidatos(){
        $candidato = $this->todos();
        return view('listaCandidatos', compact('candidato'));
    }

    public function todos(){
        $candidato = Candidato::all();
        return $candidato;
    }

    public function getById($id){
        $candidato = Candidato::findOrFail($id);
        return $candidato;
    }

    public function candidato_id($estudiante_id)
    {
        $id = Candidato::select('id')->where('estudiante_id', $estudiante_id)->get();
        return $id;
    }
}
