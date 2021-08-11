@extends('app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/mobile-navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <title>Eu Alugo | Login </title>

</head>

<body>
    
<div class="background-img">
        <img src="{{url('img/login-bg.jpg')}}" alt="" width="2200" height="1080">
    </div>

    <div class="fadeIn">
    <main class="container">
        <h2>Login</h2>
        <form action="">
            <div class="input-field">
                <input type="text" name="usermail" id="usermail"
                    placeholder="Digite seu email">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Digite sua senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
            <span>Ainda não tem uma conta? <a href="">Cadastre-se grátis</a></span>
        </form>
    </main>
    </div>
    
    

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
    
</body>
@endsection
