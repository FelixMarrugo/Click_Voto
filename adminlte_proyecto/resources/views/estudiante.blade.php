@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestor de Estudiantes</h1>

@stop

@section('content')
    <h5 class="mt-4 mb-2">Tabs in Cards</h5>

    <div class="row">
        <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Tabs</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab"><i class='fas fa-plus'></i> Registrar
                                Estudiantes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"> Editar</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <form action="{{route('guardar_estudiantes')}}" method="POST" class="row g-3 shadow p-3 mb-5 bg-body rounded "><!--Form--> 
                                        @csrf
                                        <div class="col-md-6 mb-3">
                                            <label for="" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="" class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Identificación</label>
                                            <input type="text" class="form-control" name="identificacion"
                                                id="identificacion" placeholder="12345">
                                        </div>

                                        <div class="col-6 form-group mb-3">
                                            <label>Grado</label>
                                            <select id="curso" name = "curso" class="form-control select2" style="width: 100%;">

                                                <option id="curso" name = "curso">Elije una opcion</option>
                                                @foreach ($lista_cursos as $item)
                                                    <option value="{{$item->id}}">{{ $item->numero_curso }}</option>
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
                        <div class="tab-pane" id="tab_2">
                            The European languages are members of the same family. Their separate existence is a myth.
                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                            new common language would be desirable: one could refuse to pay expensive translators. To
                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                            words. If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages.
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
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
