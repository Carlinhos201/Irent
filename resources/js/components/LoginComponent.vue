<template>
  <body>
    <title>Eu Alugo | Login</title>
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
          <div class="input-field2">
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
            >Ainda não tem uma conta? <a href="/cadastro">Cadastre-se grátis</a></span
          >
        </form>
      </main>
    </div>
    
  </body>
</template>

<script>
export default {
    props: [
      'csrf'
    ]
};
</script>
