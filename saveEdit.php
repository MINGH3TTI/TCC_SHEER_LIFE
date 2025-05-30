<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];
        $adm = $_POST['adm'];
        

        $sqlInsert = "UPDATE usuario
        SET nome_usuario='$nome',senha_usuario='$senha',email_usuario='$email',telefone_usuario='$telefone',data_usuario='$data_nascimento',genero_usuario='$genero',adm='$adm' WHERE id_usuario=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>