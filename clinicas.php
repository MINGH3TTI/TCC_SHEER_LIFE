<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínicas</title>
    <!-- Custom styles for this template -->
    <link href="css/clinicas.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


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

    <section id="features">
        <div class="headline">
            <a> Clínicas </a>
        </div>
        <div id="features-container">
            <div class="feature">
                <p> Clinica de Recuperação Dhalion
                    <br>
                    R. Waldivino Borges de Carvalho, 194
                    - Estância Jockey Clube,
                    São José do Rio Preto - SP, 15081-506
                    <br>
                    (17) 99282-7655
                </p>
            </div>
            <div class="feature">
                <p>
                    Clinica para Dependentes Químicos Grupo Luz da Vida
                    <br>
                    R. Prof. Wolfrang Wehinger, 268 - Vila Santa Cruz,
                    São José do Rio Preto - SP, 15014-130
                    <br>
                    (17) 99131-4303
                </p>
            </div>
            <div class="feature">
                <p>
                    Vital a Vida - Clínica de Recuperação
                    <br>
                    São José do Rio Preto/SP,
                    R. Pedro Dória Sobrinho, 746 - Ouro Verde,
                    São José do Rio Preto - SP, 15084-280
                    <br>
                    (11) 99691-9285
                </p>
            </div>
            <div class="feature">
                <p>
                    Clínica de Recuperação Novo Mundo
                    <br>
                    Rua Maria Patriarca, R. João Benhossi, 2450 -
                    Estância Jockey Clube, São José do Rio Preto - SP, 15081-514
                </p>
            </div>
        </div>

    </section>

    <script src="js/mobile-navbar.js"></script>
</body>

</html>