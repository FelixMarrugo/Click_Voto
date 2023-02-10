@extends('layouts.elecciones_layouts')

@section('nombre_votante')
    {{ $nombre }}
@endsection

@section('cargo')
    Contraloria
@endsection

@section('card_body')
    @foreach ($candidatos as $item)
        @if ($item->cargos->nombre_cargo == 'Contraloria')
            <div class="col-4">
                <div class="card border-primary shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                    @foreach ($info_file as $file)
                        @if ($file['candidatos_id'] == $item->id)
                            <img src="{{ asset($file['url']) }}" style="width: 120px; border-radius: 25px;"
                                class="align-self-center mt-3" alt="...">
                        @endif
                    @endforeach

                    <div class="card-body">
                        <p class="card-text"><strong>Nombre:
                            </strong>{{ $item->estudiantes->nombre }}
                            {{ $item->estudiantes->apellido }}</p>
                        <p class="card-text"><strong>Curso: </strong>
                            {{ $item->estudiantes->cursos->numero_curso }}</p>
                        <p class="card-text"><strong>Cargo: </strong>
                            {{ $item->cargos->nombre_cargo }}
                        </p>

                        <form action="{{ route('votico') }}" method="POST" class="votar">
                            @csrf
                            <input type="hidden" class="form-control text-center" style="width: 50px" id="nombre"
                                name="nombre" value="{{ $item->estudiantes->nombre }}">
                            <input type="hidden" class="form-control text-center" style="width: 50px" id="id"
                                name="id" value="{{ $id }}">
                            <input type="hidden" class="form-control text-center" style="width: 50px" id="candidato_id"
                                name="candidato_id" value="{{ $item->id }}">
                            <input type="hidden" class="form-control text-center" style="width: 50px" id="curso"
                                name="curso" value="{{ $curso_id }}">

                            <button type="submit" class="css-button-arrow--blue">Votar</button>
                        </form>

                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
