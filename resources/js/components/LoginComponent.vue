<template>
  <!-- <html> -->
  <!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mobile-navbar.css">
        <link rel="stylesheet" href="'css/login.css'">
        <title>Eu Alugo | Login </title>

    </head> -->
  <body>
    <!-- <div class="container"> -->
    <!-- <link rel="stylesheet" href="/css/login.css"> -->
    <div class="background-img">
      <img src="/img/login-bg.jpg" alt="" width="2200" height="1080" />
    </div>

    <div class="fadeIn">
      <main class="container">
        <h2>Login</h2>

        <form action="" method="POST">
          <input type="hidden" name="_token" :value="csrf">
          <div class="input-field">
            <input
              type="text"
              name="email"
              id="email"
              placeholder="Digite seu email"
            />

            <div class="underline"></div>
          </div>
          <div class="input-field">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Digite sua senha"
            />

            <div class="underline"></div>
          </div>

          <button type="submit" value="">Entrar</button>

          <a class="btn btn-link" href=""> Esqueceu a senha? </a>

          <span
            >Ainda não tem uma conta? <a href="">Cadastre-se grátis</a></span
          >
        </form>
      </main>
    </div>
    <!-- </div> -->
  </body>
  <!-- </html> -->
</template>

<script>
export default {
    props: [
      'csrf'
    ]
};
</script>