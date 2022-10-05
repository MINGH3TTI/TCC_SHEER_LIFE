<?php

    if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuario WHERE id_usuario=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuario WHERE id_usuario=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>