<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Jumbotron Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/inicio.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="menu">
      <div class="logo">
        <img src="img/sheer life.png" />
      </div>
      <div class="lista">
        <ul>
          <li class="item"><a href="inicio.php" class="link">Início</a></li>
          <li class="item"><a href="sobre.php" class="link">Sobre</a></li>
          <li class="item"><a href="clinicas.php" class="link">Clínicas</a></li>
          <li class="item"><a href="ficha.php" class="link">Ficha</a></li>
        </ul>
      </div>
      <div class="login-button">
        <button><a href="login.php">Login</a></button>
      </div>

      <div class="mobile-menu-icon">
        <button onclick="menuShow()"><img class="icon" src="img/menu_white_36dp.svg" alt=""></button>
      </div>

    </nav>
    <div class="mobile-menu">
      <ul>
        <li class="item"><a href="#" class="link">Início</a></li>
        <li class="item"><a href="#" class="link">Projetos</a></li>
        <li class="item"><a href="#" class="link">Sobre</a></li>
      </ul>

      <div class="login-button">
        <button><a href="#">Entrar</a></button>
      </div>
    </div>
  </header>

  <script src="js/mobile-navbar.js"></script>


  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">

      <div class="welcome">
        <h1 class="display-3">Bem vindo</h1>
        <p>Olá, que bom ter você conosco! É com imensa satisfação que estaremos aqui, te ajudando a superar o que lhe deixa mal. Saiba que poderá contar com o nosso sistema, sempre que precisar. Após iniciar o temporizador, ele contará o tempo que você está longe de sua dependência, caso entre em contato com ele, é só reiniciar! Em caso de emergência, você encontra as clínicas da região, seu endereço e contato. Aproveite!</p>
        <p><a class="btn btn-primary btn-lg" href="Formulario.php" role="button">Clique aqui para começar. &raquo;</a></p>
      </div>
    </div>
  </main>


  <footer>
    <div class="jumbotron">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Cadastrar-se</h2>

          <p> Primeiramente, parabens!!<br> Este é um primeiro passo para recuperar aquilo que lhe foi tomado, a sua liberdade, saiba, iremos ajudar ao maximo, porem isso tudo depende de você, então, boa sorte. </p>


          <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Logar</h2>
          <p>Faça seu login para começar sua jornada para sobriedade, com auxílio de nosso cronômetro. </p>
          <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Sobre</h2>
          <p>Conheça sobre o que nosso site tem a oferecer, e proporcione informações para sua confiaça com o nosso site <br> Venha conhecer!</p>
          <p><a class="btn btn-secondary" href="#" role="button">Detalhes &raquo;</a></p>
        </div>
      </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
</body>

</html>