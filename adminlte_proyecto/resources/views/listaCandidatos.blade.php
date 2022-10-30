@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="display-1">Lista de Candidatos</h1>

@stop


@section('content')
    @if (session('mensaje'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    <strong>¡Excelente!</strong> {{ session('mensaje') }}
                </div>
            </div>
        </div>
    @endif
    @if (session('candidato'))
        <div class="row">
            <div class="col">
                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                    <strong>Lo sentimos </strong> {{ session('candidato') }}
                </div>
            </div>
        </div>
    @endif
    @if (session('candidato_inscrito'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    <strong>¡Genial! </strong> {{ session('candidato_inscrito') }}
                </div>
            </div>
        </div>
    @endif
    <h5 class="mt-4 mb-2">Listado por grados y cargos de los candidatos</h5>

    <div class="row">
        <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Categorias</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Todos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tercero</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Cuarto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Quinto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Sexto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">Septimo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_7" data-toggle="tab">Octavo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_8" data-toggle="tab">Noveno</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_9" data-toggle="tab">Decimo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_10" data-toggle="tab">Undecimo</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row ">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Todos los candidatos</h3>
                                        </div>
                                        <!-- /.card-header todos-->
                                        <div class="card-body">
                                            <table id="todos" class="table table-bordered table-striped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        <tr>

                                                            <td>{{ $item->estudiantes->identificacion }}</td>
                                                            <td>{{ $item->estudiantes->nombre }}</td>
                                                            <td>{{ $item->estudiantes->apellido }}</td>
                                                            <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                            <td>{{ $item->cargos->nombre_cargo }}</td>
                                                            <td><a href="" class="btn btn-info btn-sm">Editar</a>
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane Tercero-->
                        <div class="tab-pane" id="tab_2">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Tercero</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="tercero">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 3)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href="" class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                        <!-- /.tab-pane cuarto-->
                        <div class="tab-pane" id="tab_3">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Cuarto</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="cuarto">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 4)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href="" class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                        <!-- /.tab-pane Quinto-->
                        <div class="tab-pane" id="tab_4">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Quinto</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="quinto">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 5)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane sexto-->
                        <div class="tab-pane" id="tab_5">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Sexto</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="sexto">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 6)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane septimo-->
                        <div class="tab-pane" id="tab_6">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Septimo</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="septimo">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 7)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane Octavo -->
                        <div class="tab-pane" id="tab_7">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Octavo</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="octavo">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 8)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane Noveno-->
                        <div class="tab-pane" id="tab_8">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Noveno</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="noveno">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 9)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane Decimo-->
                        <div class="tab-pane" id="tab_9">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Decimo</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="decimo">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 10)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane undecimo-->
                        <div class="tab-pane" id="tab_10">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Undecimo</h3>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-striped text-center" id="undecimo">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Cargo</th>
                                                        <th>Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($candidato as $item)
                                                        @if ($item->estudiantes->cursos->grados->numero_grado == 11)
                                                            <tr>
                                                                <td>{{ $item->estudiantes->identificacion }}</td>
                                                                <td>{{ $item->estudiantes->nombre }}</td>
                                                                <td>{{ $item->estudiantes->apellido }}</td>
                                                                <td>{{ $item->estudiantes->cursos->numero_curso }}</td>
                                                                <td>{{ $item->cargos->nombre_cargo }}</td>
                                                                <td><a href=""
                                                                        class="btn btn-info btn-sm">Editar</a>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->

@stop

@section('css')

@stop

@section('js')
    <script>
        $('#todos').DataTable();
        $('#tercero').DataTable();
        $('#cuarto').DataTable();
        $('#quinto').DataTable();
        $('#sexto').DataTable();
        $('#septimo').DataTable();
        $('#octavo').DataTable();
        $('#noveno').DataTable();
        $('#decimo').DataTable();
        $('#undecimo').DataTable();
    </script>
@stop
