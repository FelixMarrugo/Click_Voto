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
    <style>
        .css-button-arrow--blue {
            min-width: 130px;
            width: 100%;
            height: 40px;
            color: #fff;
            padding: 5px 10px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            outline: none;
            overflow: hidden;
            border-radius: 5px;
            border: none;
            background-color: #3d348b
        }

        .css-button-arrow--blue:hover {
            border-radius: 5px;
            padding-right: 24px;
            padding-left: 8px;
        }

        .css-button-arrow--blue:hover:after {
            opacity: 1;
            right: 10px;
        }

        .css-button-arrow--blue:after {
            content: "\00BB";
            position: absolute;
            opacity: 0;
            font-size: 20px;
            line-height: 40px;
            top: 0;
            right: -20px;
            transition: 0.4s;
        }

        img:hover {
            border: 1px solid blue;
        }
        .button,
        .button::before,
        .button::after,
        .button span,
        .button span::before,
        .button span::after {
            transition: all ease .5s;
        }

        .button {
            position: relative;
            display: inline-block;
            padding: 0.3em;
            /*margin: 1em;*/
            border: solid 1px;
            text-transform: uppercase;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            box-shadow: 0 0 5em .5em rgba(50, 50, 150, 0.5);
        }

        .button span {
            display: inline-block;
            width: 100%;
            padding: 0.6em 2em;
        }

        .button:hover span {
            background-color: #fff;
            color: #112;
        }

        .button::before,
        .button::after,
        .button span::before,
        .button span::after {
            content: '';
            position: absolute;
            border: 1px;
        }

        .button::before,
        .button span::before {
            border-style: solid none;
        }

        .button::before,
        .button span::after {
            left: 0;
            top: -0.4em;
            width: 100%;
            height: calc(100% + 0.8em);
        }

        .button::after,
        .button span::after {
            border-style: none solid;
        }

        .button::after,
        .button span::before {
            top: 0;
            left: -0.4em;
            height: 100%;
            width: calc(100% + 0.8em);
        }

        .button:hover::after,
        .button:hover span::after {
            transform: scaleY(0);
        }

        .button:hover::before,
        .button:hover span::before {
            transform: scaleX(0);
        }

        .button:hover span::after,
        .button:hover span::before {
            opacity: 0;
        }

        p {
            font-size: 15px;
        }

        h1 {
            font-size: 35px;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card" style="margin-top: 25px;">
                <blockquote class="blockquote">
                    <p class="text-center"><strong>Nombre del Votante: </strong>@yield('nombre_votante')</p>
                </blockquote>
                <div class="card-header">
                    <h1 class="text-center">@yield('cargo')</h1>
                </div>
                <div class="card-body">


                    <div class="row">
                        @yield('card_body')
                        <div class="col">
                            <div class="card border-primary shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">


                                <div class="card-body">
                                    <p></p>

                                    <form action="{{ route('votico') }}" method="POST" id="votar">
                                        @csrf
                                        <input type="hidden" class="form-control text-center" style="width: 50px"
                                            id="nombre" name="nombre" value="Voto en blanco">
                                        <input type="hidden" class="form-control text-center" style="width: 50px"
                                            id="id" name="id" value="{{ $id }}">
                                        <input type="hidden" class="form-control text-center" style="width: 50px"
                                            id="candidato_id" name="candidato_id" value="{{ $item->id }}">
                                        <input type="hidden" class="form-control text-center" style="width: 50px"
                                            id="curso" name="curso" value="{{ $curso_id }}">

                                        <button type="submit" class="button">Voto en Blanco</button>
                                    </form>

                                </div>
                            </div>
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


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var allform = document.querySelectorAll('form')
        console.log(allform)
        allform.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var data = new FormData(this)
                var nombre = data.get('nombre');
                console.log(data.get('nombre'))
                Swal.fire({
                    title: `Ha elegido a ${nombre}`,
                    text: "¿Seguro? este voto se guardará en la base de datos",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, estoy seguro'
                }).then((result) => {
                    if (result.isConfirmed) {
                        /*Swal.fire({
                            //position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000
                        })*/
                        let timerInterval
                        Swal.fire({
                            title: 'VOTO GUARDADO',
                            html: 'Su voto a sido guardado correctamente',
                            icon: 'success',
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                                this.submit()
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })


                    }
                })
            })
        })
    </script>
    @yield('js')
</body>

</html>
