<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Template</title>
    <link href="{{URL::to('/')}}/css/styles1.css" rel="stylesheet" />
    <link href="{{URL::to('/')}}/css/styles.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a
      ><button
        class="btn btn-link btn-sm order-1 order-lg-0"
        id="sidebarToggle"
        href="#"
      >
        <i class="fas fa-bars"></i></button
      > -->
      <!-- Navbar Search-->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
      <a class="nav-link" style="color: #69738C" href="#">Help Center</a>
      <a class="nav-link" style="color: #69738C" href="#">Our Support</a>
      <!-- Navbar-->
      <ul style="    padding: 8px;
      background-color: #15A4FA;
      left: 16px;
      position: relative;" class="navbar-nav ml-auto ml-md-0">
        <img height="23" style="margin-top: 8px;" src="{{URL::to('/')}}/assets/img/profile.png" class="rounded float-left" alt="...">
        <li class="nav-item dropdown">
            <a style="color:white;" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link" href="charts.html"
            ><div class="sb-nav-link-icon">
            </div>
            John Doe<i style="margin-left: 10px;" class="fas fa-chevron-circle-down"></i></a
          >
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <a class="nav-link-head">
                <button type="button" class="btn btn-secondary btn-lg">
                  <i style="margin-right: 5px;" class="fas fa-plus"></i> ADD A
                  BOOK
                </button>
              </a>
              <div style="height: 10px; background-color: #19202e;"></div>
              <a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-book"></i>
                </div>
                Now Reading</a
              >
              <a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-globe-americas"></i>
                </div>
                Browse</a
              >
              <a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-shopping-cart"></i>
                </div>
                Buy Books</a
              ><a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-star"></i>
                </div>
                Favourite Books</a
              ><a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-th-list"></i>
                </div>
                Wishlist</a
              ><a class="nav-link" href="#"
                ><div class="sb-nav-link-icon">
                  <i style="color: white;" class="fas fa-history"></i>
                </div>
                History</a
              >
            </div>
            <div style="height: 10px; background-color: #19202e;"></div>
            <div class="sb-sidenav-menu">
                <div class="nav">
                  <a class="nav-link" href="#"
                    ><div class="sb-nav-link-icon">
                        <i style="    font-size: 8px;
                        margin-bottom: 2px;
                        color: #E64C66;" class="fas fa-circle"></i>
                      
                    </div>
                    Must Read Titles</a
                  >
                  <a class="nav-link" href="#"
                  ><div class="sb-nav-link-icon">
                    <i style="    font-size: 8px;
                    margin-bottom: 2px;
                    color: #FFAB00;" class="fas fa-circle"></i>
                  </div>
                  Best Of List</a
                >
                <a class="nav-link" href="#"
                    ><div class="sb-nav-link-icon">
                        <i style="    font-size: 8px;
                        margin-bottom: 2px;
                        color: #00BFDD;" class="fas fa-circle"></i>
                    </div>
                    Classics Novels</a
                  >
                  <a class="nav-link" href="#"
                    ><div class="sb-nav-link-icon">
                        <i style="    font-size: 8px;
                        margin-bottom: 2px;
                        color: #7874CF;" class="fas fa-circle"></i>
                    </div>
                    Non Fiction</a
                  >
                </div>
            <div style="height: 10px; background-color: #19202e;"></div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main style="background-color: #f8f9fc;">
          <div class="container-fluid">
            <h1 style="color: #444c63; font-size: 33px;" class="mt-4">
              Browser Avaliable Books
            </h1>
            <hr />
            <div>
              <div class="row">
                <div class="col">
                  <a href="#" class="badge badge-primary">All Books</a>
                  <a href="#" class="badge badge-primary">Most Recent</a>
                  <a href="#" class="badge badge-primary">Most Popular</a>
                  <a href="#" class="badge badge-primary">Free Books</a>
                </div>
                <div class="col col-lg-4">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Enter Keyworks"
                      aria-label="Search"
                      aria-describedby="basic-addon2"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top: 30px;" class="card-deck">
                <div class="card">
                  <img style="border-radius: 4px" src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top" alt="...">
                  <div class="card-footer">
                      <h5>Harry Potter</h5>
                        <small class="text-muted">By Rowling</small>
                        <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
                  </div>
                </div>
                <div style="border-radius: 4px" class="card">
                    <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <h5>Harry Potter</h5>
                          <small class="text-muted">By Rowling</small>
                          <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
                    </div>
                  </div>
                  <div style="border-radius: 4px" class="card">
                    <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <h5>Harry Potter</h5>
                          <small class="text-muted">By Rowling</small>
                          <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
                    </div>
                  </div>
                  <div style="border-radius: 4px" class="card">
                    <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <h5>Harry Potter</h5>
                          <small class="text-muted">By Rowling</small>
                          <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
                    </div>
                  </div>
                  <div style="border-radius: 4px" class="card">
                    <img src="{{URL::to('/')}}/assets/img/harrypotter.webp" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <h5>Harry Potter</h5>
                          <small class="text-muted">By Rowling</small>
                          <i style="color: rgb(255, 208, 0);" class="fas fa-star"></i>5
                    </div>
                  </div>
               
          </div> 
        </main>
      
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/datatables-demo.js"></script>
  </body>
</html>
