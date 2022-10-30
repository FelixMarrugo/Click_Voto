<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votar</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row" style="height: 80vh;">
            <div class="card border-primary shadow p-3 mb-5 bg-body rounded" style="width: 25rem; margin: auto;">
                <div class="card-header">
                    <h1 class="display-5 text-center">Votar</h1>
                    <p class="text-center"><strong>Estudiante:</strong> ingresar Indentificación</p>
                </div>
                <div class="card-body text-center">
                    <form action="{{route('Registrar_Voto_Estudiante')}}" class="votar" method="POST">
                        @csrf
                        <label for="" class="form-label ">Indentificación</label>
                        <input type="text" id="identificacion" name="identificacion" class="form-control mb-3"
                            placeholder="identificacion">
                            @if(session('mensaje'))
                            <p><strong>¡Alerta!</strong> {{session('mensaje')}}</p>
                            @endif
                        <button type="submit" class="btn btn-primary btn-sm">Ir a votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
    
        $('.votar').submit(function(e) {
            e.preventDefault();

            let identificacion = document.getElementById("identificacion").value;
            if (isNaN(identificacion)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '¡La identificacion tiene que ser un numero!'
                })
            }
        })
    </script>
</body>

</html>
