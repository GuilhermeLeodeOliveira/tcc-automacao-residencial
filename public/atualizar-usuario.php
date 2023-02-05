<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
 
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $sexo = $_POST['sexoUser'];
        $email = $_POST['email'];
        $tel1 = $_POST['telefone1'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $numero = $_POST['numero'];

        $sqlUpdate = "UPDATE users SET nome='$nome', dataNasc='$dataNasc',sexo='$sexo',telefone1='$tel1',email='$email' WHERE idUser='$id'";

        $result = $conn->query($sqlUpdate);

        $sqlUpdate = "UPDATE endereco SET endereco='$rua', numero='$numero', cep='$cep', bairro='$bairro', cidade='$cidade'  WHERE idUser='$id'";

        $result = $conn->query($sqlUpdate);
        
    }
    else{
        echo "Não foi possível realizar alterações, tente novamente.";
    }
    
    header("Location: editar-usuarios.php");

?>
