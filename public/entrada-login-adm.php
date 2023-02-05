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
            $senha = mysqli_real_escape_string($conn,trim($_POST['senha']));
             
            $sql="SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'";

            $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

            $quantidade = $result->num_rows;

            if($quantidade >= 1){ 
                $user = $result->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['idAdministrador'] = $user['idAdministrador'];
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['usuario'] = "Administrador";

                header("Location: dashboard.php");
            
            }else if($quantidade == 0){
                $_SESSION['usuario_invalido']= "<p style='color:red'; font-weight:bolder;>Usuário não encontrado!</p>";
                header("Location: login-adm.php");
              
            }



        }
    }

?>