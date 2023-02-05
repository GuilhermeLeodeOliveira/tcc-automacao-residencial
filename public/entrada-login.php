<?php

    include("conexao.php");
    session_start();
    
    if(isset($_POST['email']) || isset($_POST['senha'])){
        
        if(strlen($_POST['email'])== 0){
            echo "<p>Preencha o campo email.</p>";
        }else if(strlen($_POST['senha'])== 0){
                echo "<p>Preencha o campo senha.</p>";
        }else{

            $email = mysqli_real_escape_string($conn,trim($_POST['email']));
            $senha = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha'])));
            
            $sql="SELECT u.idUser, u.nome, u.email, u.dataNasc, u.sexo,u.telefone1, e.endereco, e.numero, e.cep, e.bairro, e.cidade FROM users u
                    JOIN endereco e ON e.idUser = u.idUser
                    WHERE u.email = '$email' AND u.senha = '$senha'";
            $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

            $quantidade = $result->num_rows;

            if($quantidade >= 1){ 
                $user = $result->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
                
                $_SESSION['idUser'] = $user['idUser'];
                $_SESSION['dataNasc'] = $user['dataNasc'];
    
                date_default_timezone_set('America/Sao_Paulo');
                $dataUltimoAcesso =  date('Y/m/d H:i');

                $sql = "UPDATE users SET ultimoAcesso = '$dataUltimoAcesso' WHERE email = '$email' AND senha= '$senha'";
                $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

                header("Location: index.php");
            
            }else{
                $_SESSION['usuario_invalido']= "<p style='color:red';>Usuário não encontrado!</p>";
                header("Location: login.php");
            }
        }
    }








    /*$email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['email'] = $email;
    //$senha=base64_encode($senha);
    if ($conn->connect_error) {
        die("Falha na conexão " . $conn->connect_error);
    }

    $sql = "SELECT email, senha FROM users;";
    $dadosUser = "SELECT email , nome , dataNasc , pesoIni, altura , sexo FROM users;";
    $result = $conn->query($sql);  // aqui
    $logged = false;
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){
            header("location:index.php");   
            $logged = true;
            $_SESSION['email'] = $email;
        }  
        else
            echo "Usuário não encontrado!";
    }

    if(isset($_SESSION['email'])){
        if($_SESSION['email']!=""){
            $logged = true;
        }
    }
    if(isset($_GET['sair'])){
        $_SESSION['email']="";
        $logged = false;
        unset($_SESSION['email']);
        session_destroy();
        header('login.html');
        
    }
    $conn->close();

*/
?>