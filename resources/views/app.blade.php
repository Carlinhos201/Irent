<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/mobile-navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link src="{{URL::asset('js/mobile-navbar.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Eu Alugo | Início</title>

</head>

<body>
    <header>
        <nav>
            <a class="logo" href="/">EuAlugo</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="/">Teste 1</a></li>
                <li><a href="/">Teste 2</a></li>
                <li><a href="/">Teste 3</a></li>
                <li><a href="login">Entrar</a></li>
            </ul>
        </nav>
    </header>

@yield('content')


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
                        link.style.animation
                        ? (link.style.animation = "")
                        : (link.style.animation = 'navLinkFade 0.5s ease forwars 0.3s')
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>