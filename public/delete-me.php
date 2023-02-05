<?php
    include_once('conexao.php');
    
    if(!empty($_GET['id'])){

        $idUser = $_GET['id'];
       
        $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
        $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";

        $sqlDelete = "DELETE u, e FROM users u
                        JOIN endereco e ON e.idUser = u.idUser
                        WHERE e.idUser = '$idUser' AND u.idUser = '$idUser'";

        $result = $conn->query($sqlDelete);

        $sqlDelete = "DELETE FROM agendamento
                        WHERE idUser = '$idUser'";

        $result = $conn->query($sqlDelete);

        header("Location: login.php");

       
    }
    
    $conn->close();
    exit;
?>
