<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap');
    </style>


</head>

<body>
    <div class="container">
        <nav class="navbar-main" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <img src="{{ asset('images/logounap.jpg') }}" alt="Logo Universidad Nacional del Altiplano Puno"
                        width="auto" height="100">
                </a>
                <p class="navbar-title is-size-4">SISTEMA DE ASIGNACIÓN DE HORARIO</p>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
        </nav>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">MÓDULOS</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Docentes
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Cursos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Horas
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Aulas y Laboratorios
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Horarios
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        reportes
                    </a>
                </li>
            </ul>
            <hr>
            
        </div>






        <!--

    <header>
    <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/logounap.jpg') }}" alt="Logo Universidad Nacional del Altiplano Puno" width="200" height="60">
                </div>
                <div class="col-10">
                    <nav class="navbar" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="#"> SISTEMA DE ASIGNACIÓN DE HORARIO</a>
                        </div>
                    <div>
                        <img src="{{ asset('images/logosistemas.png') }}" alt="Logo Ingeniería de Sistemas" width="50" height="50">
                    </div>
                    </nav>
                </div>
        </div>
    </header>
    <div class="container">
      <!--  <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/logounap.jpg') }}" alt="Logo Universidad Nacional del Altiplano Puno" width="200" height="50">
                </div>
                <div class="col-10">
                    <nav class="navbar" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="#"> SISTEMA DE ASIGNACIÓN DE HORARIO</a>
                        </div>
                    <div>
                        <img src="{{ asset('images/logosistemas.png') }}" alt="Logo Ingeniería de Sistemas" width="80" height="50">
                    </div>
                    </nav>
                </div>
        </div>
    </div>-->
        <!--<div class="row">
            <div class="col-2 col-sm-1">
                Sidebar
            </div>
            <div class="col-10 col-sm-11" style="background-color: white;">
                Cabana Perez
            </div>
        </div> -->



        <!--<header class="encabezado">
       
        <nav class="navbar is-link" role="navigation" aria-label="main navigation">
            <div>
                <img src="{{ asset('images/logounap.jpg') }}" alt="Logo Universidad Nacional del Altiplano Puno" width="200" height="50">
            </div>
            <div class="navbar-brand">
                <a class="navbar-item" href="#"> SISTEMA DE ASIGNACIÓN DE HORARIO
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div>
                <img src="{{ asset('images/logosistemas.png') }}" alt="Logo Ingeniería de Sistemas" width="80" height="50">
            </div>

            
        </nav>
    </header>

    <main class="contenido">

    </main> -->
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
