
<?php
    include_once('conexao.php');
    
    if(!empty($_GET['id'])){

        $idUser = $_GET['id'];
        $idAgendamento = $_GET['idAgendamento'];
       
        $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";

        $sqlDelete = "DELETE FROM fourhouse_db.agendamento WHERE idUser='$idUser' AND idAgendamento='$idAgendamento'";

        $result = $conn->query($sqlDelete);
        header("Location: agendamento.php?id=$idUser");
       
    }
    
    $conn->close();
    exit;
?>
