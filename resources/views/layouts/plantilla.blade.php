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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Istok+Web&family=K2D:wght@100&family=Karla&family=PT+Sans&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/49d967e6a5.js" crossorigin="anonymous"></script>   
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Image and text -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white"  style="background: rgb(9,9,121);
background: radial-gradient(circle, rgba(9,9,121,1) 0%, rgba(34,31,119,1) 0%, rgba(27,29,84,1) 0%, rgba(33,50,54,1) 100%, rgba(12,16,81,1) 100%, rgba(2,0,36,1) 100%);">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
          src="{{asset( 'images/logounap.jpg' )}}""
          style="height: 79px; margin-left: -10px; width: 220px;"
          />
        </a>
        <!-- Left links -->
        <div class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="nav-item">
            <a class="nav-link font" style="color: rgb(255, 255, 255);   font-size: 27px;
            ">SISTEMA DE ASIGNACIÓN DE HORARIO</a>
          </div>
        </div>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
        <div class="dropdown">
          
            <img
              src="{{asset( 'images/logosistemas.png' )}}"
              style="height: 55px; margin-left: -10px; width: 50px;"
            />
            
          </a>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


        <div class="row">
        <div class="col-3">
        <br>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link active" aria-current="page">
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
                    <a href="{{url('cursos')}}" class="nav-link text-white">
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
                        Reportes
                    </a>
                </li>
            </ul>
            <hr>

        </div>

        </div>




        

  
    <div class="col-9">
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
    <script>
            $(document).ready(function() {
    var table = $('#example').DataTable({
        buttons:[
            {
                extend: 'createState',
                config: {
                    creationModal: true,
                    toggle: {
                        columns:{
                            search: true,
                            visible: true
                        },
                        length: true,
                        order: true,
                        paging: true,
                        search: true,
                    }
                }
            },
            'savedStates'
        ],
        lengthChange: false
    });
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
});


            
    </script>

</body>

</html>
