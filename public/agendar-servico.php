<?php
    include_once('conexao.php');
    session_start();
    $idUser = $_SESSION['idUser'];

    $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
    $result = $conn->query($sqlSelect);
    $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";
    $resultEndereco = $conn->query($sqlSelectEndereco);
  

    if($result->num_rows > 0){
        $user_data = mysqli_fetch_assoc($result);
        $user_data_endereco = mysqli_fetch_assoc($resultEndereco);
      
    }
    else{
        header("Location: dashboard.php");
    }


    $idServico = mysqli_real_escape_string($conn, trim($_POST['servico']));
    $endereco = mysqli_real_escape_string($conn, trim($_POST['endereco']));
    $cep = mysqli_real_escape_string($conn, trim($_POST['cep']));
    $logradouro = mysqli_real_escape_string($conn, trim($_POST['logradouro']));
    $bairro = mysqli_real_escape_string($conn, trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
    $numeroCasa = mysqli_real_escape_string($conn, trim($_POST['numero-casa']));
    $dataAgendamento = mysqli_real_escape_string($conn, trim($_POST['dataAgendamento']));
    $horaAgendamento = mysqli_real_escape_string($conn, trim($_POST['horaAgendamento']));
    $tel = mysqli_real_escape_string($conn, trim($_POST['tel']));
 
    $statusServico = "Pendente";

    $valorTeste = $user_data_endereco['endereco'].", ".$user_data_endereco['bairro']." Nº".$user_data_endereco['numero']." - ".$user_data_endereco['cep'];

    if(empty($cep) && empty($logradouro) && empty($bairro) && empty($cidade) && empty($numeroCasa)){
        
        // Pegando o id do endereço que o usuário cadastrou no dia em que criou a sua conta no site 
        $numero = $user_data_endereco['numero'];
        $cep = $user_data_endereco['cep'];
        
        $sql = "SELECT idEndereco FROM endereco WHERE idUser = '$idUser' AND numero = '$numero' AND cep = '$cep' ";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
        }

        $idEndereco = $row['idEndereco'];
        // Peguei o id do Endereço

        // Inseri na tabela agendamento os valores do agendamento

        $statusServico = "Pendente";

        $sql = "INSERT INTO agendamento VALUES (DEFAULT, '$dataAgendamento', '$horaAgendamento', '$statusServico', '$idUser', '$idEndereco', '1', '$idServico')";
        
        
        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        $_SESSION['servico_agendado'] = "<p style='color:green';>Serviço agendado com sucesso.</p>";
        header("Location: agendamento.php?id=$idUser");  

    }else if($endereco == "outro-endereco" && !empty($cep) && !empty($logradouro) && !empty($bairro) && !empty($cidade) && !empty($numeroCasa)){

        $sql = "INSERT INTO endereco VALUES (DEFAULT, '$logradouro', '$numeroCasa', '$cep', '$bairro', '$cidade', '$idUser')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        // Pegando o id do endereço que o usuário cadastrou no dia em que criou a sua conta no site 
        
        $sql = "SELECT idEndereco FROM endereco WHERE idUser = '$idUser' AND numero = '$numeroCasa' AND cep = '$cep' ";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
        }

        $idEndereco = $row['idEndereco'];
        // Peguei o id do Endereço

        $sql = "INSERT INTO agendamento VALUES (DEFAULT, '$dataAgendamento', '$horaAgendamento', '$statusServico', '$idUser', '$idEndereco', '4', '$idServico')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);  
        
        $_SESSION['servico_agendado'] = "<p style='color:green';>Serviço agendando com dasdadsucesso.</p>";
        

    }else{

        $_SESSION['agendamento_invalido'] = "<p style='color:red';>Por favor, insira os dados corretamente para realizar o agendamento.</p>";
        
        header("Location: agendamento.php?id=$idUser");   
    
    }

?>
    