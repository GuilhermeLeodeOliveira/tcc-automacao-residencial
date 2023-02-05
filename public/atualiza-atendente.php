<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE atendente SET nome='$nome',email='$email',senha='$senha' WHERE idAtendente='$id'";

        $result = $conn->query($sqlUpdate);


    }
    else{
        echo "Não foi possível realizar alterações, tente novamente.";
    }
    header("Location: dados-atendentes.php");
?>
