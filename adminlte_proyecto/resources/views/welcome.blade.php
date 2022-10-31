<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ClickVoto | Home</title>

        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    </head>
    
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('welcome')}}">Click Voto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    
                  <li class="nav-item">
                    @if (Route::has('login'))
                
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-warning" >Log in</a>

                        @endauth
                
                    @endif
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    <div class="container" style="margin-top: 50px; ">
      
        <!--Cuerpo de la pagina bienvenidos-->
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col" >
            </div>
            <div class="col">
              <h2>Click Voto</h2>
                <p style="text-align: justify;">Bienvenidos Estudiantes y docentes, les presentamos el proyecto Click Voto, 
                    que busca simplificar y optimizar el proceso de votacion escolar para las instituciones
                    educativas, votar nunca fue tan facil como lo es hoy con click voto :D
                </p>
                <a href="{{route('votar_estudiante')}}" target="_blank" class="btn btn-primary">Click para votar</a>
                <a href="{{route('resultados')}}" class="btn btn-info">Resultados</a>
            </div>
          </div>
        </div>

    </div>

    </body>
</html>
