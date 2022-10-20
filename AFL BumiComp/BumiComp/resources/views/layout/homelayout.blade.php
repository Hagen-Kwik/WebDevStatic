<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" /> 
</head>
  <body>
    <nav class="navbar bg-dark navbar-expand-lg">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" href="#">BMC</a>
          <div class="w-75 d-flex justify-content-end">
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="d-flex flex-right">
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/about">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Gadgets
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Hardisk</a></li>
                      <li><a class="dropdown-item" href="#">PC & Laptop</a></li>
                      <li><a class="dropdown-item" href="#">Printer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>     
        </div>
      </nav>
      <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              @yield('header')
            </div>
          </div>
        </div>
      </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<h1><?=$title;?></h1>
    <div>
        @yield('container')
    </div>
</body>
</html>