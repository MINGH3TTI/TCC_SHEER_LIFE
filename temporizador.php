<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PROJETO</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/time.css" />
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

  <main>

    <div class="relogio">
      <div>
        <span id="dias">00</span>
        <span class="tempo">Dias</span>
      </div>

      <div>
        <span id="horas">00</span>
        <span class="tempo">Horas</span>
      </div>

      <div>
        <span id="minutos">00</span>
        <span class="tempo">Minutos</span>
      </div>
      <div>
        <span id="segundos">00</span>
        <span class="tempo">Segundos</span>
      </div>
    </div>

  </main>

 

<script src="js/mobile-navbar.js"></script>
  <script src="js/script-time.js"></script> 

</body>

</html>