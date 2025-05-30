<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'projeto';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    } 
?>