<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/mobile-navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <link src="{{ URL::asset('js/mobile-navbar.js') }}">
    <link src="{{ URL::asset('js/app.js') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    

</head>

<body>
<<<<<<< HEAD
   <header>
    <div class="container">

        

        <nav class="navbar navbar-expand" style="background-color: currentcolor; margin-left: -405px;margin-right: -405px;">
            <a class="navbar-brand" href="#" style="color: white;
            font-size: 30px;">Irent lkoioilk</a>
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
=======



    <header>
        <nav>

            <a class="logo" href="/">EuAlugo</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
>>>>>>> origin/carlim
            </div>
            <ul class="nav-list">
                <li><a href="/">Teste 1</a></li>
                
                <li><a href="/">Contato</a></li>
                
                <li>
                    <a href="login" onclick="event.preventDefault();
                    document.querySelector('form.logout').submit();">Entrar</a>
                    <form action="{{ url('logout') }}" class="logout" method="POST" style="display: none">
                        @csrf
                    </form>
                </li>
                {{-- <li class="nav-item">
                    <span style="color: white" class="nav-link">{{auth()->user()->nome}}</span>
                </li> --}}

                <li><a href="CadastroAnuncio.vue">Criar Conta</a></li>
            </ul>

        </nav>
    </header>

    @yield('content')

    {{-- @yield('content') --}}


    <script>
        class MobileNavbar {
            constructor(mobileMenu, navList, navLinks) {
                this.mobileMenu = document.querySelector(mobileMenu);
                this.navList = document.querySelector(navList);
                this.navLinks = document.querySelectorAll(navLinks);
                this.activeClass = "active";

                this.handleClick = this.handleClick.bind(this);
            }

            animateLinks() {
                this.navLinks.forEach((link) => {
                    link.style.animation ?
                        (link.style.animation = "") :
                        (link.style.animation = 'navLinkFade 0.5s ease forwars 0.3s')
                });
            }

            handleClick() {
                this.navList.classList.toggle(this.activeClass);
                this.mobileMenu.classList.toggle(this.activeClass);
                this.animateLinks();
            }

            addClickEvent() {
                this.mobileMenu.addEventListener("click", this.handleClick);
            }

            init() {
                if (this.mobileMenu) {
                    this.addClickEvent();
                }
                return this;
            }
        }

        const mobileNavbar = new MobileNavbar(
            ".mobile-menu",
            ".nav-list",
            ".nav-list li",
        );
        mobileNavbar.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

</body>

</html>
