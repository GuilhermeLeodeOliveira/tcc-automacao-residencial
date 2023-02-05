<?php
    include_once('protect-adm.php'); 

    include_once('conexao.php');
    
    if(!empty($_GET['id'])){

        $idAtendente = $_GET['id'];
       
        $sqlSelect = "SELECT * FROM atendente WHERE idAtendente= $idAtendente";
        $result = $conn->query($sqlSelect);
        

        if($result->num_rows > 0){
            while ($user_data = mysqli_fetch_assoc($result)){
                
                /*TABELA Atendentes*/ 
                $id = $user_data['idAtendente'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];               
                $senha = $user_data['senha'];               

            }
           
        }
        else{
            header("Location: dados-atendentes.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando usuário | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
</head>
<body class="pag-editando-usuario">
    <?php
        include_once('includes/header-dashboard.php');
    ?>
    <div class="sidebar">
        <nav>
            <a href="dashboard.php"><img src="img/logo/logo-4house.png" alt="logo 4house"></a>
        </nav>
        <div class="container-sidebar">
            <ul>
                <a href="dashboard.php"><img src="img/dashboard/icon/home.png" alt=""><li class="">Interface</li></a>
                <a href="editar-usuarios.php"><img src="img/dashboard/icon/edit.png" alt=""><li class="">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="">Deletar usuários</li></a>
            </ul>    
        </div>
        <div class="container-sidebar-opcoes-admin" id="opcoes-admin">
            <hr>
            <ul>
                <p>*Acesso exclusivo</p>
                <a href="dashboard.php"><li class="selected">Dados atendentes</li></a>            
            </ul>    
        </div>
    </div>
    <main>
        <form method="post" class="container-editar-usuario" action="atualiza-atendente.php">
            
            <h1>Editar atendente</h1>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $nome?>">
            </div> 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email?>">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" value="<?php echo $senha?>">
            </div>
         
            <div class="form-button">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update" value="Salvar alterações">
            </div>
        </form>
    </main>

    <script>
    
        /*SISTEMA DE IDENTIFICAÇÃO DO ADMINISTRADOR OU ATENDENTE*/
        const usuario = "<?php echo $_SESSION['usuario']; ?>"

        if(usuario == "Administrador"){
            
            document.getElementById('opcoes-admin').style.visibility = "visible";

        }else{
            document.getElementById('opcoes-admin').style.visibility = "hidden";
        }

    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="script/js.js" defer></script>
    
</body>
</html>