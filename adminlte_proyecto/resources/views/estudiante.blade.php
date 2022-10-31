@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="display-1">Gestor de Estudiantes</h1>

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
    @if (session('candidato_null'))
        <div class="row">
            <div class="col">
                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                    <strong> ¡Lo sentimos! </strong> {{ session('candidato_null') }}
                </div>
            </div>
        </div>
    @endif
    <h5 class="mt-4 mb-2">Base de datos de estudiantes</h5>

    <div class="row">
        <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Tabs</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab"><i
                                    class='fas fa-plus'></i> Inscribir Candidatos </a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"> Registrar
                                Estudiantes</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row ">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">DataTable with default features</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="estudiantes" class="table table-bordered table-striped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>identificacion</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido(s)</th>
                                                        <th>Curso</th>
                                                        <th>Estado</th>
                                                        <th>Editar</th>
                                                        <th>Incribir como candidato</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($estudiante as $item)
                                                        <tr>
                                                            <td>{{ $item->identificacion }}</td>
                                                            <td>{{ $item->nombre }}</td>
                                                            <td>{{ $item->apellido }}</td>
                                                            <td>{{ $item->cursos->numero_curso }}</td>
                                                            <td>{{ $item->estado }}</td>
                                                            <td><button class="btn btn-info">editar</button></td>
                                                            <td><a class="btn btn-warning btn-sm verificar-curso"
                                                                    @if ($item->cursos->numero_curso != 'Pre-escolar-01' and
                                                                        $item->cursos->numero_curso != 'Pre-escolar-02' and
                                                                        $item->cursos->numero_curso != 'Pre-escolar-03' and
                                                                        $item->cursos->numero_curso != '1-01' and
                                                                        $item->cursos->numero_curso != '1-02' and
                                                                        $item->cursos->numero_curso != '2-01' and
                                                                        $item->cursos->numero_curso != '2-02') href="{{ route('inscribirCandidatos', $item->id) }}">¿Candidato?</a> @endif
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
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <form action="{{ route('guardar_estudiantes') }}" method="POST"
                                        class="row g-3 shadow p-3 mb-5 bg-body rounded guardar_estudiante"
                                        style="margin-top: 25px">
                                        <!--Form-->
                                        @csrf
                                        <div class="col-md-6 mb-3">
                                            <label for="" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="" class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido"
                                                required>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Identificación</label>
                                            <input type="text" class="form-control" name="identificacion"
                                                id="identificacion" placeholder="12345" required>
                                        </div>

                                        <div class="col-6 form-group mb-3">
                                            <label>Grado</label>
                                            <select id="curso" name="curso" class="form-control select2"
                                                style="width: 100%;">

                                                <option value="0" id="curso" name="curso">Elije una opcion
                                                </option>
                                                @foreach ($lista_cursos as $item)
                                                    <option value="{{ $item->id }}">{{ $item->numero_curso }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="estado" name="estado" checked>
                                                <label class="form-check-label">Estado</label>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#estudiantes').DataTable();
    </script>

    @if (session('candidato_inscrito') == 'ok')
        <script>
            Swal.fire(
                '¡Inscrito!',
                '¡El candidaro se inscribio correctamente!',
                'success'
            )
        </script>
    @endif
    <script>
        
    </script>

@stop
