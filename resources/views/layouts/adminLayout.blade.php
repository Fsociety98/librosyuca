<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ URL::to('/') }}/css/styles.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/css/styles1.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/css/star-rating.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/css/star-rating.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand"
            href="index.html">{{ config('app.name', 'Laravel') }}</a><button
            class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button><!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a href="{{ url('/libros') }}"  class="nav-link-head">
                            <button  type="button" class="btn btn-secondary btn-lg">
                                <i style="margin-right: 5px;" class="fas fa-plus"></i>
                                AGREGA UN LIBRO
                            </button>
                        </a>
                        <div class="sb-sidenav-menu-heading">OPTIONS</div>
                        <a class="nav-link" href="{{ url('/autores') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                            Autores
                        </a><a class="nav-link" href="{{ url('/clasificaciones') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-stream"></i></div>
                            Clasificaciones
                        </a>
                        </a><a class="nav-link" href="{{ url('/libros') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Libros
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ URL::to('/') }}/js/scripts.js"></script>
    <script src="{{ URL::to('/') }}/js/star-rating.js"></script>

</body>

</html>
