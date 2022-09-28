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


    <div>
     <img src="img/sheer.png">
        <h1>Login</h1>

        <form action="ConfirmarLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="button" type="submit" name="submit" value="Enviar">
            <br> <br><br> 
            <a class="ancora" href="Formulario.php">Não é registrado?</a>
        </form>
    </div>
</body>
</html>