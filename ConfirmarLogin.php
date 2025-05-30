<?php
include_once('conexao.php');

// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuario WHERE email_usuario = '$email' and senha_usuario = '$senha'";

    $resultado_usuario = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    // print_r($sql);
     

    if ($resultado > 0)
     {

            $buscar = $resultado['id_usuario'];
            
            $sqltempo = "SELECT * FROM tempo WHERE user_id = '$buscar' and final=null";
            $tempo =  mysqli_query($conexao, $sqltempo);
      //      $resultadotempo = mysqli_fetch_assoc($tempo);
            if ($tempo = 0)
            {
                // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
                date_default_timezone_set('America/Sao_Paulo');
                // CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
           
               $data =new DateTime;
               $data = date_format($data,'Y-m-d H:i:s');

                $sqlinserir = "INSERT INTO tempo(user_id,inicio) VALUES ('$buscar','$data')";
                $inserir =  mysqli_query($conexao, $sqlinserir);
                //$resultadoinserir = mysqli_fetch_assoc($inserir);
                $dias = 0;
                $horas = 0;
                $minutos = 0;
                $segundos = 0;
            }



            session_start();

            $_SESSION['id'] = $resultado['id_usuario'];
            $_SESSION['nome'] = $resultado['nome_usuario'];
            $_SESSION['adm'] = $resultado['adm'];
            $_SESSION['email'] = $resultado['email_usuario'];
                  

            if ($_SESSION['adm'] == "1") {
                header("Location: sistema.php");
            } else {
                
                header("Location: temporizador.php");
            }
        } else {
            //Váriavel global recebendo a mensagem de erro
            header("Location: login.php?erro=dadoserrado");
        }
        //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    } else {
        header("Location: login.php?erro=faltadados");
    }
