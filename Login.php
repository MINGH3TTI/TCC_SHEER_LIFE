<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>

<img class="bg" src="img/bg.png">
<img class="img" src="img/sheer life.png">


    

    <div>
        
        <h1>Login</h1>

        <form action="ConfirmarLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <input class="button" type="submit" name="submit" value="Enviar">
            <br>
            <a class="ancora" href="Formulario.php">Não é registrado?</a>
        </form>

        <div class="alerta">
            <p>
                <?php
                //Recuperando o valor da variável global, os erro de login.
                if (isset($_GET['erro'])) {
                    if ($_GET['erro'] == "dadoserrado") {
                        echo "Dados estão incorretos!";
                    } else {
                        echo "Preencha todos os campos!";
                    }
                }
                ?>
        </div>
        <div class="alertaFeliz">
            <?php
            if (isset($_GET['cadastrado'])) {
                echo "Cadastrado com sucesso!";
            }
            ?>
            </p>
        </div>

    </div>
</body>

</html>