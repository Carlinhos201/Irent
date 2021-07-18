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
    <header>
        <div class="container">



            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">iRent</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"
                    style="">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Imovéis para alugar <span
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
                        <label for="" style="    margin-right: 10px;">Ajuda</label> 
                      
                        <label for=""><a href="" style="color: white; background: orangered; border-radius: 20px"><i class="bi bi-person-circle"></i> Conta</a></label>
                        
                    </form>
                </div>
            </nav>



            @yield('content')

        </div>
    </header>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>

</html>
