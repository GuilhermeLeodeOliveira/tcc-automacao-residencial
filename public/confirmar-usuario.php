<?php
    session_start();
    include("conexao.php");
    
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha'])));
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";


    $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

    $quantidade = $result->num_rows;

    if($quantidade == 1){ 
        $user = $result->fetch_assoc();
        
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['recuperar-id'] = $user['idUser'];
        $_SESSION['recuperar-nome'] = $user['nome'];
        $_SESSION['recuperar-email'] = $user['email'];
        $_SESSION['recuperar-dataNasc'] = $user['dataNasc'];
        header("Location: perguntas-usuario-recuperar.php");
    }else{
        $_SESSION['usuario_invalido']= "<p style='color:red';>Usuário não encontrado!</p>";
        header("Location: recuperar-senha.php");
    }
    
?>