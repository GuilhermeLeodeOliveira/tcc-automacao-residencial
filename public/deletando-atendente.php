<?php
    include_once('conexao.php');
    
    if(!empty($_GET['id'])){

        $idAtendente = $_GET['id'];
       
        $sqlSelect = "SELECT * FROM atendente WHERE idAtendente= $idAtendente";

        $sqlDelete = "DELETE FROM heroku_acd6119eb0eb682.atendente WHERE idAtendente='$idAtendente'";

        $result = $conn->query($sqlDelete);
        header("Location: dados-atendentes.php");
        
       
    }
    
    $conn->close();
    exit;
?>
