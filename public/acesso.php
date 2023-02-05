<?php
    session_start();
    include_once('conexao.php');
    
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $dataNasc = mysqli_real_escape_string($conn,trim($_POST['dataNasc']));
    $sexo = mysqli_real_escape_string($conn,trim($_POST['sexoUser']));
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha'])));
    $senha2 = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha2'])));
    $tel1 = mysqli_real_escape_string($conn,trim($_POST['tel1']));
    $tel2 = mysqli_real_escape_string($conn,trim($_POST['tel2']));
    $cep = mysqli_real_escape_string($conn,trim($_POST['cep']));
    $endereco = mysqli_real_escape_string($conn,trim($_POST['endereco']));
    $bairro = mysqli_real_escape_string($conn,trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conn,trim($_POST['cidade']));
    $numero = mysqli_real_escape_string($conn,trim($_POST['numero-casa']));

    /*$dataCriacaoConta = DATE_FORMAT(NOW($dataCriacaoConta),'%Y-%m-%d %h:%i:%s');*/
    
    //$senha = base64_encode($senha); 
    //$verificaData = "select now() as 'teste'";
    //$result = mysqli_query($conn,$verificaData);
    //$row = mysqli_fetch_assoc($result);
    //$result=$conn->query($verificaData);

    date_default_timezone_set('America/Sao_Paulo');
    $dataCriacaoConta = date('Y/m/d H:i');
    $dataUltimoAcesso = date('Y/m/d H:i');

    $verificaUser = "select count(*) as total from users where email='$email'";
    $result = mysqli_query($conn,$verificaUser);
    $row = mysqli_fetch_assoc($result);

    if($senha !== $senha2){
        $_SESSION['senhas_iguais'] = "<p style='color:red';>As senhas não são iguais.</p>";
        header('Location:signup.php');
        exit;
    }

    if($row['total'] == 1){
        $_SESSION['usuario_existe']= "<p style='color:red';>Usuário ja existe.</p>";
        header('Location:signup.php');
        exit;
    }
    
    if (empty($nome) || empty($email) || empty($senha) || empty($dataNasc) || empty($senha2)){
        $_SESSION['campos_vazios'] = "<p style='color:red';>Campos obrigatórios.</p>";
        header('Location:signup.php');
        exit;
    }else{

        $sql = "INSERT INTO users VALUES (DEFAULT, '$nome','$dataNasc','$sexo', '$tel1', '$tel2','$email','$senha','$dataCriacaoConta', '$dataUltimoAcesso')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        $sql = "SELECT idUser FROM users WHERE email = '$email' AND senha= '$senha'";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        mysqli_set_charset($conn,'utf8');
        
        while($row = $result->fetch_assoc()) {
            $idUser = $row['idUser'];
        }

        $sql = "INSERT INTO endereco (idEndereco, endereco, numero, cep, bairro, cidade, idUser) VALUES (DEFAULT, '$endereco', '$numero', '$cep', '$bairro', '$cidade', '$idUser')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        $_SESSION['status_cadastro'] = "<p style='color:green';>Usuário cadastrado com sucesso.</p>";

        header("Location: login.php");

    }/*else{
        header('Location:signup.php');
    }*/
    
    $conn->close();
    exit;


?>
       


