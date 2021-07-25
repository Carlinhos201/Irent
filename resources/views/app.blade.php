<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>MarktPlace</title>

</head>

<body>




            <nav class="navbar navbar-expand-lg" style="margin-right: 140px; margin-left:140px">
                <a class="navbar-brand" href="#">iRent</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"
                    style="">
                    @auth
                        
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Imovéis para  <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Imóveis para comprar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Para proprietários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Indicar imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Sobre nós</a>
                            <i class="fab fa-accessible-icon"></i>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <label for="" style="margin-right: 10px;">Ajuda</label> 
                      
                     
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a href="#" style="color: white; background: orangered; border-radius: 20px" 
                                     class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="bi bi-person-circle"></i> Conta</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <p>Caso não tenha sua conta, cadastre já</p>
                                    <a href="#" class="dropdown-item">Entrar</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="nav-link" href="#" onclick="event.preventDefault();
                                    document.querySelector('form.logout').submit();" style="">
                                       Sair
                                   </a>
                                   <form action="{{ url('logout') }}" class="logout" method="POST" style="display: none">
                                    @csrf
                                </form>
                                </div>
                            </li>
                        </ul>
                    </form>
                    @endauth
                </div>
            </nav>

          


            @yield('content')

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>
