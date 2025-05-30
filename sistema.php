<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    



    if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
    $logado = $_SESSION['id'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuario WHERE id_usuario LIKE '%$data%' or nome_usuario LIKE '%$data%' or email_usuario LIKE '%$data%' ORDER BY id_usuario DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    }
    $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sistema.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>SISTEMA</title>

</head>
<body>

      <nav>
          <img class="logo" src="img/sheer life.png">
          <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
          <ul class="nav-list">
              <li><a href="ficha.php">Usuario</a></li>
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="clinicas.php">Clínicas</a></li>
              <li><a href="javascript: abrir();">Motivação</a></li>
          </ul>
      </nav>
 

    <script src="js/mobile-navbar.js"></script>
    <br>

    <?php  
        echo"$logado";
      /*  echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>


            <div id="popup" class="popup">
				<a href="javascript: fechar();"><img src="img/x.png" height="20px" class="ancora"></a>
				<img src="img/sheer.png" class="sheer">			
				<h1 class="paragrafo">“A riqueza não consiste em ter grandes posses, mas em ter poucas necessidades.” <br> – Epicteto</h1>			
            <?php
                while($user_data = mysqli_fetch_assoc($result)) 
                echo"<p>".$user_data['nome_usuario']."</p>";
                

                */
            ?>
            </div>

    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data</th>
                    <th scope="col">Genero</th>
                </tr>
            </thead>
            <tbody>

                    


                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id_usuario']."</td>";
                        echo "<td>".$user_data['nome_usuario']."</td>";
                        echo "<td>".$user_data['senha_usuario']."</td>";
                        echo "<td>".$user_data['email_usuario']."</td>";
                        echo "<td>".$user_data['telefone_usuario']."</td>";
                        echo "<td>".$user_data['data_usuario']."</td>";
                        echo "<td>".$user_data['genero_usuario']."</td>";

                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id_usuario]' title='Editar'>                       
                        <i class='fa-solid fa-pencil'></i>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id_usuario]' title='Deletar'>
                            <i class='fa-solid fa-x'></i>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>