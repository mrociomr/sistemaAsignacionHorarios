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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/49d967e6a5.js" crossorigin="anonymous"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    


<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <img src="https://derecho.unap.edu.pe/storage/2019/05/unap_logo.svg" alt="Bootstrap" width="30" height="24">
            <a class="navbar-brand" href="#">Sistema de Asignación de Horarios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cursos.index')}}">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Horas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aulas y Laboratorios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Horarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
    <div class="container pt">

        <div class="row">
           


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

                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
-->
            <div class="container mt-5">
                <br>
                <br>
                <br>
                <div class="card border-info mb-3" style="max-width: 100%;">
                    <div class="card-header">Módulo: @yield('title')</div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
                integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
            </script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
            <script type = "text/javascript" language = "javascript" src = "https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js" ></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

            <script>
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        responsive: true,
                        autoWidth: false,
                        "language": {
                            "url": "{{asset("idioma/es_dtable.json")}}"
                        }
                    });

                    new $.fn.dataTable.FixedHeader(table);
                });
            </script>
            <script src="https://kit.fontawesome.com/49d967e6a5.js" crossorigin="anonymous"></script>
            @yield('js')

</body>

</html>
