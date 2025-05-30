<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['atualizar']))
    {
        $id = $_POST['id'];
        $vicio = $_POST['vicio_ficha'];
        $motivo = $_POST['motivo_ficha'];
        

        $sqlInsert = "UPDATE ficha
        SET vicio_ficha='$vicio',motivo_ficha='$motivo' WHERE id_ficha=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>