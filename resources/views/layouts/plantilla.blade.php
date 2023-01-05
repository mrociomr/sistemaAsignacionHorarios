<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap" rel="stylesheet">
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap'); 
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
</head>
<body>
<nav class="navbar-main" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="{{ asset('images/logounap.jpg') }}" alt="Logo Universidad Nacional del Altiplano Puno" width="auto" height="100">
    </a>
    <p class="navbar-title is-size-4">SISTEMA DE ASIGNACIÓN DE HORARIO</p>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav>






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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>