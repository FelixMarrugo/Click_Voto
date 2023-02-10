@extends('layouts.elecciones_layouts')

@section('nombre_votante')
    {{ $nombre }}
@endsection

@section('cargo')
    Representante Estudiantil
@endsection

@section('card_body')
    
        @foreach ($candidatos as $item)
            @if ($item->estudiantes->cursos->grados->numero_grado == $grado and
                $item->cargos->nombre_cargo == 'Representante Estudiantil')
                <div class="col-4">
                    <div class="card border-primary shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                        @foreach ($info_file as $file)
                            @if ($file['candidatos_id'] == $item->id)
                                <img src="{{ asset($file['url']) }}" style="width: 120px; border-radius: 25px;"
                                    class="align-self-center mt-3" alt="...">
                            @endif
                        @endforeach

                        <div class="card-body">
                            <p class="card-text" id="nombre" name><strong>Nombre:
                                </strong>{{ $item->estudiantes->nombre }}
                                {{ $item->estudiantes->apellido }}</p>
                            <p class="card-text"><strong>Curso: </strong>
                                {{ $item->estudiantes->cursos->numero_curso }}</p>
                            <p class="card-text"><strong>Cargo: </strong>
                                {{ $item->cargos->nombre_cargo }}
                            </p>

                            <form action="{{ route('votico') }}" method="POST" id="votar">
                                @csrf
                                <input type="hidden" class="form-control text-center" style="width: 50px" id="nombre"
                                    name="nombre" value="{{ $item->estudiantes->nombre }}">
                                <input type="hidden" class="form-control text-center" style="width: 50px" id="id"
                                    name="id" value="{{ $id }}">
                                <input type="hidden" class="form-control text-center" style="width: 50px" id="candidato_id"
                                    name="candidato_id" value="{{ $item->id }}">
                                <input type="hidden" class="form-control text-center" style="width: 50px" id="curso"
                                    name="curso" value="{{ $curso_id }}">

                                <button type="submit" class="button">Votar</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endif
            @if ($grado == 'Pre-escolar' or $grado == '1' or $grado == '2')
                @if ($item->estudiantes->cursos->grados->numero_grado == '3' and
                    $item->cargos->nombre_cargo == 'Representante Estudiantil')
                    <div class="col-4">
                        <div class="card border-primary shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                            @foreach ($info_file as $file)
                                @if ($file['candidatos_id'] == $item->id)
                                    <img src="{{ asset($file['url']) }}" style="width: 120px; border-radius: 25px;"
                                        class="align-self-center mt-3" alt="...">
                                @endif
                            @endforeach

                            <div class="card-body">
                                <p class="card-text" id="nombre" name><strong>Nombre:
                                    </strong>{{ $item->estudiantes->nombre }}
                                    {{ $item->estudiantes->apellido }}</p>
                                <p class="card-text"><strong>Curso: </strong>
                                    {{ $item->estudiantes->cursos->numero_curso }}</p>
                                <p class="card-text"><strong>Cargo: </strong>
                                    {{ $item->cargos->nombre_cargo }}
                                </p>

                                <form action="{{ route('votico') }}" method="POST" id="votar">
                                    @csrf
                                    <input type="hidden" class="form-control text-center" style="width: 50px"
                                        id="nombre" name="nombre" value="{{ $item->estudiantes->nombre }}">
                                    <input type="hidden" class="form-control text-center" style="width: 50px"
                                        id="id" name="id" value="{{ $id }}">
                                    <input type="hidden" class="form-control text-center" style="width: 50px"
                                        id="candidato_id" name="candidato_id" value="{{ $item->id }}">
                                    <input type="hidden" class="form-control text-center" style="width: 50px"
                                        id="curso" name="curso" value="{{ $curso_id }}">

                                    <button type="submit" class="button">Votar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    
@endsection
