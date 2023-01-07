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
            <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white"  style="background: rgb(9,9,121);
background: radial-gradient(circle, rgba(9,9,121,1) 0%, rgba(34,31,119,1) 0%, rgba(27,29,84,1) 0%, rgba(33,50,54,1) 100%, rgba(12,16,81,1) 100%, rgba(2,0,36,1) 100%);">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
          src="https://3.bp.blogspot.com/-KAfa4TADUYU/V_IjA0qjM_I/AAAAAAAAVfQ/efJ7IJs7aoAalnMP_WWPiz8zSmXu6ClqwCLcB/w1200-h630-p-k-no-nu/Onii%2Bchan.gif"
          style="height: 79px; margin-left: -10px; width: 70px;"
          />
        </a>
        <!-- Left links -->
        <div class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="nav-item">
            <a class="nav-link" style="color: rgb(255, 255, 255);   font-size: 27px;   font-weight: bold;
            ">Dashboard</a>
          </div>
        </div>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://psicocode.com/wp-content/uploads/2021/02/onii-chan.jpg"
              style="height: 55px; margin-left: -10px; width: 50px; border-radius:50%;"
            />
            
          </a>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->



<!-- -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div  class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                    <i class="bi-bootstrap fs-1"></i>
                </a>
                <ul style="color:brown;" class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="fa-sharp fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:brown;"  href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                            <i class="bi-speedometer2 fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                            <i class="bi-table fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                            <i class="bi-heart fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                            <i class="bi-people fs-1"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100">
            <!-- content -->
            <h2>A glorious Bootstrap 5 icon sidebar menu!</h2>
            <hr />
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
