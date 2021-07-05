<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>MarktPlace</title>
</head>
<body>
   <header>
    <div class="container">

        

        <nav class="navbar navbar-expand" style="background-color: currentcolor; margin-left: -405px;margin-right: -405px;">
            <a class="navbar-brand" href="#" style="color: white;
            font-size: 30px;">Irent  felipe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 1200px;font-size: larger;">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#" style="color: white">Categoria <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white">quem somos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"style="color: white"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
               <label for=""><a href="" style="color: white">Entrar ou Cadastrar</a></label>
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button> --}}
              </form>
            </div>
          </nav>

         
        
        @yield('content')
        
    </div>
  </header>
</body>

</html>
