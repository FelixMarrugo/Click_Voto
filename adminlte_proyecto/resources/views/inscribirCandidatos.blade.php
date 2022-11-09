@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h4 class="text-center">Inscripción de candidatos</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    
                    <div class="col ">
                        <div class="card card-primary card-outline" style=" margin: auto; width: 60%">
                            <div class="card-body">
                                <h3 class="text-center">
                                    Informacion del Candidato
                                </h3>

                                <form action="{{ route('CandidatoEstudiante') }}" class="row g-3  guardar"
                                    style="margin-top: 25px" method="POST" enctype="multipart/form-data">
                                    <!--Form-->
                                    @csrf
                                    <div class="col-12 mb-3 text-center">
                                        <p>FOTO</p>
                                        <img src="{{ asset('img/candidato1.jpg') }}" style="width: 10rem; border-radius: 25px;"  class="align-self-center mt-3"
                                        alt="..." s>
                                    </div>
                                    <div class="col-12 mb-3 mt-3 text-center">
                                        <input type="file" name="file" id="file" accept="image/*">
                                        @error('file')
                                        <br>
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">

                                        <input type="hidden" class="form-control text-center" style="width: 50px"
                                            id="id" name="id" value="{{ $info->id }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            value="{{ $info->nombre }}" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido"
                                            value="{{ $info->apellido }}" disabled>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Identificación</label>
                                        <input type="text" class="form-control" name="identificacion" id="identificacion"
                                            placeholder="12345" value="{{ $info->identificacion }}" disabled>
                                    </div>

                                    <div class="col-6 form-group mb-3">
                                        <label>Grado</label>
                                        <input type="text" class="form-control" name="grado" id="grado"
                                            placeholder="" value="{{ $info->cursos->numero_curso }}" disabled>
                                    </div>
                                    <div class="col-6 mb-3">

                                        <label>Estado</label>
                                        <input type="text" class="form-control" name="grado" id="grado"
                                            placeholder="" value="{{ $info->estado }}" disabled>

                                    </div>

                                    <div class="col-6 mb-3">

                                        <label>Cargo</label>
                                        <select id="cargo" name="cargo" class="form-control select2"
                                            style="width: 100%;">
                                            @if (isset($cargo_estudiante_representante))
                                                <option value="{{ $cargo_estudiante_representante->id }}">
                                                    {{ $cargo_estudiante_representante->nombre_cargo }}</option>
                                            @else
                                                <option value="{{ $cargo_estudiante_representante1->id }}">
                                                    {{ $cargo_estudiante_representante1->nombre_cargo }}</option>
                                                <option value="{{ $cargo_estudiante_representante2->id }}">
                                                    {{ $cargo_estudiante_representante2->nombre_cargo }}</option>
                                            @endif


                                        </select>

                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary" name="inscribir"
                                            id="inscribir">Inscribir</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card {
            /*border: 1px solid #3f3d73;*/
            box-shadow: 5px 5px 15px #3f3d73b3;
        }

        .around {
            margin: 10%;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .around img {
            width: 100%;
        }
    </style>
@stop

@section('js')
    <script>
        $('.guardar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro de inscribir?',
                text: "El candidato se guardara automaticamente en la base de datos",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, inscribir'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

@stop
