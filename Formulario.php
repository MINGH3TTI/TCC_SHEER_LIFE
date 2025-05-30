<?php
include_once('conexao.php');

if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];

    $erros = [];

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $telefone = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_NUMBER_INT);

    //Filtros

    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = "E-mail inválido";
    }

    if (!$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT)) {
        $erros[] = "Número incorreto";
    }
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<li class='erro'>$erro</li>";
        }
    } else {

        $result1 = mysqli_query($conexao, "INSERT INTO usuario(nome_usuario,senha_usuario,email_usuario,telefone_usuario,data_usuario,genero_usuario)VALUES('$nome','$senha','$email','$telefone','$data_nascimento','$genero')");
        header("Location: Login.php?cadastrado=bemvindo");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="css/formulario.css" rel="stylesheet">

</head>

<body>
    <img class="bg" src="img/bg.png">
    <div class="box">
        <form action="Formulario.php" method="POST">

            <h1 class="titulo">Cadastrar-se</h1><br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required maxlength="30">
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required maxlength="30">
                <label for="email" class="labelInput">Email</label>
            </div>
            <br>

            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required maxlength="30">
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br>

            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required maxlength="11">
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br>


            <p>Gênero:
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
            </p>

            <input type="submit" name="submit" id="submit">
            <br><br>
            <a class="ancora" href="Login.php">Já é registrado?</a>

        </form>
    </div>
</body>

</html>