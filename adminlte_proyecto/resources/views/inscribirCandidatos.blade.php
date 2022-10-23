@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="max-width: 20rem; margin: auto;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="around">
                            <img src="https://i.pinimg.com/474x/d8/f4/ba/d8f4ba914ff362706312cae39ac5f530.jpg"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_file', $info->id) }}" style="margin-top: -15px;" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control mb-3" id="customFile" name="file" id="file"
                                accept="image/*" />
                            @error('file')
                                <h6>{{ $message }}</h6>
                            @enderror
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card" style=" margin: auto;">
                    <div class="card-body">
                        <h3 class="text-center">
                            Informacion del Candidato
                        </h3>
                        <form action="" class="row g-3  " style="margin-top: 25px">
                            <!--Form-->
                            @csrf

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
                                <input type="text" class="form-control" name="grado" id="grado" placeholder=""
                                    value="{{ $info->cursos->numero_curso }}" disabled>
                            </div>
                            <div class="col-6 mb-3">

                                <label>Estado</label>
                                <input type="text" class="form-control" name="grado" id="grado" placeholder=""
                                    value="{{ $info->estado }}" disabled>

                            </div>

                            <div class="col-6 mb-3">

                                <label>Cargo</label>
                                <select id="curso" name="curso" class="form-control select2" style="width: 100%;">
                                   
                                        <option id="curso" name="curso">{{ $cargo }}</option>
                                    

                                </select>

                            </div>

                            <a href="" class="btn btn-primary" nama="inscribir" id="Inscribir">Inscribir</a>

                        </form>
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
        < script src = "//cdn.jsdelivr.net/npm/sweetalert2@11" >
    </script>
    
@stop
