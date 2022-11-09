@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="display-1">Gestor de Estudiantes</h1>

@stop


@section('content')

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
                                            <input type="text" class="form-control" id="nombre" name="nombre">
                                            <p id="validar_nombre"></p>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="" class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido">
                                            <p id="validar_apellido"></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Identificación</label>
                                            <input type="text" class="form-control" name="identificacion"
                                                id="identificacion" placeholder="12345">
                                            <p id="validar_identificacion"></p>
                                        </div>

                                        <div class="col-6 form-group mb-3">
                                            <label>Grado</label>
                                            <select id="curso" name="curso" class="form-control select2"
                                                style="width: 100%;">

                                                <option value="0" id="curso" name="curso">Elije una opcion
                                                </option>
                                                @foreach ($lista_cursos as $item)
                                                    <option id="curso" name="curso" value="{{ $item->id }}">
                                                        {{ $item->numero_curso }}</option>
                                                @endforeach
                                            </select>
                                            <p id="validar_curso"></p>
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

    @if (session('mensaje') == 'ok')
        <script>
            Swal.fire(
                'Guardado!',
                '¡El estudiante se guardó correctamente!',
                'success'
            )
        </script>
    @endif

    @if (session('mensaje') == 'registrado')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '¡Este estudiante ya esta inscrito! verifique la identificación',
                //footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
    @endif

    <script>
        $('.guardar_estudiante').submit(function(e) {
            e.preventDefault();
            let bool_nombre = true;
            let bool_apellido = true;
            let bool_identificacion = true;
            let bool_curso = true;

            //Mostrar text en el HTML
            //document.getElementById("validar_nombre").innerHTML = "New text!";
            mensaje_error_input = "El campo no debe estar vacio";
            mensaje_valido = "Correcto";

            //Validar input nombre
            nombre = document.getElementById("nombre").value;
            if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
                document.getElementById("validar_nombre").innerHTML = mensaje_error_input;
                document.getElementById("validar_nombre").style.color = "red";
                bool_nombre = false;
            } else {
                document.getElementById("validar_nombre").innerHTML = mensaje_valido;
                document.getElementById("validar_nombre").style.color = "green";
                bool_nombre = true;
            }

            //Validar input apellido
            apellido = document.getElementById("apellido").value;
            if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)) {
                document.getElementById("validar_apellido").innerHTML = mensaje_error_input;
                document.getElementById("validar_apellido").style.color = "red";
                bool_apellido = false;
            } else {
                document.getElementById("validar_apellido").innerHTML = mensaje_valido;
                document.getElementById("validar_apellido").style.color = "green";
                bool_apellido = true;
            }

            identificacion = document.getElementById("identificacion").value;
            mensaje_error = "Este campo debe ser numerico";
            //En construcción
            if (identificacion == null || identificacion.length == 0 || /^\s+$/.test(identificacion)) {
                document.getElementById("validar_identificacion").innerHTML = mensaje_error;
                document.getElementById("validar_identificacion").style.color = "red";
                bool_identificacion = false;
            } else
            if (!(isNaN(identificacion))) {
                document.getElementById("validar_identificacion").innerHTML = mensaje_valido;
                document.getElementById("validar_identificacion").style.color = "green";
                bool_identificacion = true;
            } else {
                document.getElementById("validar_identificacion").innerHTML = mensaje_error;
                document.getElementById("validar_identificacion").style.color = "red";
                bool_identificacion = false;
            }


            //Validar select
            curso = document.getElementById("curso").selectedIndex;
            mensaje_error = "Seleccione un curso";
            if (curso == null || curso == 0) {
                document.getElementById("validar_curso").innerHTML = mensaje_error;
                document.getElementById("validar_curso").style.color = "red";
                bool_curso = false;
            } else {
                document.getElementById("validar_curso").innerHTML = mensaje_valido;
                document.getElementById("validar_curso").style.color = "green";
                bool_curso = true;
            }

            if (bool_nombre == true && bool_apellido == true && bool_identificacion == true && bool_curso == true) {
                Swal.fire({
                    title: '¿Seguro deseas guardar?',
                    text: "El estudiante se guardará en la base de datos",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Guardar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        /* Swal.fire(
                             'Deleted!',
                             'Your file has been deleted.',
                             'success'
                         )*/
                        this.submit();
                    }
                })
            }
        })
    </script>

@stop
