<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elecciones 2022</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1 class="display-1 text-center">Personeria</h1>
                </div>
                <div class="card-body">
                    @foreach ($candidatos as $item)
                        @if ($item->cargos->nombre_cargo == 'Personeria')
                            <div class="col-4">
                                <div class="card border-primary" style="width: 18rem;">
                                    <img src="{{ asset('img/candidato2.jpg') }}" style="width: 18rem" class=""
                                        alt="..." s>
                                    <div class="card-body">
                                        <p class="card-text"><strong>Nombre: </strong>{{ $item->estudiantes->nombre }}
                                            {{ $item->estudiantes->apellido }}</p>
                                        <p class="card-text"><strong>Curso: </strong>
                                            {{ $item->estudiantes->cursos->numero_curso }}</p>
                                        <p class="card-text"><strong>Cargo: </strong> {{ $item->cargos->nombre_cargo }}
                                        </p>

                                        <form action="{{ route('votico') }}" method="POST">
                                            @csrf
                                            <input type="hidden" class="form-control text-center" style="width: 50px"
                                                id="id" name="id" value="{{ $id }}">
                                            <input type="hidden" class="form-control text-center" style="width: 50px"
                                                id="candidato_id" name="candidato_id" value="{{ $item->id }}">
                                            <input type="hidden" class="form-control text-center" style="width: 50px"
                                                id="curso" name="curso" value="{{ $curso_id }}">

                                            <button type="submit" class="btn btn-primary">Votar</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>



        </div>


    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
