<?php
session_start();
include_once('conexao.php');
// print_r($_SESSION);



if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$id = $_SESSION['id'];

$sql = "SELECT * FROM usuario WHERE id_usuario = {$id}";
$sql1 = "SELECT * FROM ficha WHERE cod_usuario = {$id}";

$result = $conexao->query($sql);
$result1 = $conexao->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ficha.css">

    <title>Ficha</title>

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
      
    </div>
  </header>

    <div class="headline">
            <a> Ficha </a>
        </div>
    <div class="container">
        <div class="item">
            <h2> Suas informações</h2>
        </div>
        <div class="item">
            <h2> Seus vicios</h2>
        </div>
    </div>

    <div class="container">
        <div class="item">
            <table>
                <thead>
                    <tr>

                        <th scope="col">Nome</th>


                    </tr>
                </thead>


                <tbody>
                    <?php
                    echo "$id";
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";

                        echo "<td>" . $user_data['nome_usuario'] . "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>



        <div class="item">
            <table>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Vicio</th>
                        <th scope="col">Motivo</th>

                    </tr>
                </thead>


                <tbody>
                    <?php
                    echo "$id";
                    while ($user_data = mysqli_fetch_assoc($result1)) {
                        echo "<tr>";

                        echo "<td>" . $user_data['vicio_ficha'] . "</td>";
                        echo "<td>" . $user_data['motivo_ficha'] . "</td>";

                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editVicio.php?id=$user_data[id_ficha]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id_ficha]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary me-md-5" type="button">
        <a href="logout.php">Sair</a></button>
    </div>
</body>

</html>