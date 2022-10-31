<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col-4">
                <div class="card">
                    <h1>Votos</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1 class="display-4">Resultados electorales</h1>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Todos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Tercero</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">cuarto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#quinto" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false">Quinto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#sexto" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false">Sexto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#septimo" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false">Septimo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#octavo" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false">octavo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#noveno" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false">noveno</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#decimo" type="button" role="tab"
                                aria-controls="pills-disabled" aria-selected="false">decimo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#undecimo" type="button" role="tab"
                                aria-controls="pills-disabled" aria-selected="false">undecimo</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                                @if ($item->estudiantes->cursos->grados->numero_grado == 3)
                                    @foreach ($array_votos as $votos)
                                        @if ($item->id == $votos[0])
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <p>Nombre: {{ $item->estudiantes->nombre }}
                                                        {{ $item->estudiantes->apellido }}
                                                    </p>
                                                    <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                    <p>Votos: {{ $votos[1] }}</p>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">

                            @foreach ($candidatos as $item)
                                @if ($item->estudiantes->cursos->grados->numero_grado == 4)
                                    @foreach ($array_votos as $votos)
                                        @if ($item->id == $votos[0])
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <p>Nombre: {{ $item->estudiantes->nombre }}
                                                        {{ $item->estudiantes->apellido }}
                                                    </p>
                                                    <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                    <p>Votos: {{ $votos[1] }}</p>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                        </div>
                        <div class="tab-pane fade" id="quinto" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                                @if ($item->estudiantes->cursos->grados->numero_grado == 5)
                                    @foreach ($array_votos as $votos)
                                        @if ($item->id == $votos[0])
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <p>Nombre: {{ $item->estudiantes->nombre }}
                                                        {{ $item->estudiantes->apellido }}
                                                    </p>
                                                    <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                    <p>Votos: {{ $votos[1] }}</p>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>


                        <div class="tab-pane fade" id="sexto" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                                @if ($item->estudiantes->cursos->grados->numero_grado == 6)
                                    @foreach ($array_votos as $votos)
                                        @if ($item->id == $votos[0])
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <p>Nombre: {{ $item->estudiantes->nombre }}
                                                        {{ $item->estudiantes->apellido }}
                                                    </p>
                                                    <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                    <p>Votos: {{ $votos[1] }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>

                        <div class="tab-pane fade" id="septimo" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                            @if ($item->estudiantes->cursos->grados->numero_grado == 7)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>

                        <div class="tab-pane fade" id="octavo" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                            @if ($item->estudiantes->cursos->grados->numero_grado == 8)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>

                        <div class="tab-pane fade" id="noveno" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                            @if ($item->estudiantes->cursos->grados->numero_grado == 9)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>

                        <div class="tab-pane fade" id="decimo" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                            @if ($item->estudiantes->cursos->grados->numero_grado == 10)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="undecimo" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">
                            @foreach ($candidatos as $item)
                            @if ($item->estudiantes->cursos->grados->numero_grado == 11)
                                @foreach ($array_votos as $votos)
                                    @if ($item->id == $votos[0])
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p>Nombre: {{ $item->estudiantes->nombre }}
                                                    {{ $item->estudiantes->apellido }}
                                                </p>
                                                <p>Cargo: {{ $item->cargos->nombre_cargo }}</p>
                                                <p>Votos: {{ $votos[1] }}</p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>

                    </div>
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
