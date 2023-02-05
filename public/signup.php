<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta | 4House</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styles.css">
    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">  
    <!--FIM FAVICON-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body id="pag-login" class="pag-signup">
        
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <center><img src="img/gif/modal.gif" width="35px" alt=""></center>
    </div>
  </div>
</div>
<!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt=""> 
    </div>
  </div>
<!-- fim do preloader --> 
    <form class="container-login signup" action="acesso.php" method="post" id="form">
        <img class="logo" src="img/logo/logo-4house.png" alt="">
        <!-- Small modal -->
        <div class="top-login">
            <div class="container-message-user">    
                <?php 
                    if(isset($_SESSION['campos_vazios'])){
                        echo($_SESSION['campos_vazios']);
                        unset($_SESSION['campos_vazios']);
                    }
                    if(isset($_SESSION['status_cadastro'])){
                        echo($_SESSION['status_cadastro']);
                        unset($_SESSION['status_cadastro']);
                    }
                    if(isset($_SESSION['usuario_existe'])){
                        echo($_SESSION['usuario_existe']);
                        unset($_SESSION['usuario_existe']);
                    }
                ?>    
            </div>
        <h1>CRIE SUA CONTA</h1>
         
        <p>Digite seu nome e sobrenome<span>*</span></p>
        <input style="height: 10px;" type="text" name="nome" id="nomeUser" placeholder="Digite nome e sobrenome" required>
        <p>Digite sua data de nascimento<span>*</span></p>
        <input style="height: 10px;" type="date" name="dataNasc" id="dataNasc" min="1950-01-01" max="2018-01-01" required>
           
        <div class="container-sexo">
            <p>Sexo<span>*</span></p>
                <select name="sexoUser" id="sexoUser">
                    <option name="sexoUser" value="Masculino">Masculino</option>
                    <option name="sexoUser" value="Feminino">Feminino</option>
                    <option name="sexoUser" value="Prefiro não dizer">Prefiro não dizer</option>
                </select> 
        </div>
        
        <p>Telefone<span>*</span></p>
        <div class="form-group group-tel">
            <input class="number" style="height: 10px;" type="text" name="tel1" id="telUser" placeholder="Telefone 1">
            <input style="height: 10px;" type="text" name="telUser" id="tel2" placeholder="Telefone 2 (opcional)">
        </div>
        <span id="numberValid"></span>
        <p>Endereço<span>*</span></p>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input style="height: 10px;" type="text" name="cep" id="cep" placeholder="ex.0000-000">
            <label for="rua">Rua</label>
            <input style="height: 10px;" type="text" name="endereco" id="logradouro" placeholder="Rua">
        </div>
        <div class="form-group">
            <label for="bairro" id="label-bairro">Bairro</label>
            <input style="height: 10px;" type="text" name="bairro" id="bairro" placeholder="Bairro">
        </div>
        <div class="form-group">
            <label for="localidade">Cidade</label>
            <input style="height: 10px;" type="text" name="cidade" id="localidade"  placeholder="Cidade">
            <label for="numero">Nº</label>
            <input style="height: 10px;" type="text" name="numero-casa" id="numero-casa"  placeholder="Numero da casa">
        </div>
            
        <p>Digite um email <span>*</span></p>
        <input class="email" style="height: 10px;" type="text" name="email" id="email" placeholder="Email">       
        <span id="textValidate"></span>
        <div class="form-password">    
            <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.804 9c1.038-1.793 2.977-3 5.196-3 3.311 0 6 2.689 6 6s-2.689 6-6 6c-2.219 0-4.158-1.207-5.196-3h-3.804l-1.506-1.503-1.494 1.503-1.48-1.503-1.52 1.503-3-3.032 2.53-2.968h10.274zm7.696 1.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg> Insira uma senha <span>*</span></p>
            <img id="eyeSvg" onclick="eyeCLick()" src="img/input-senha/eye-open.svg" alt="">
            <input style="height: 10px;" type="password" name="senha" id="senha"  placeholder="Senha">
        </div>
        <div class="form-password2"> 
            <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.804 9c1.038-1.793 2.977-3 5.196-3 3.311 0 6 2.689 6 6s-2.689 6-6 6c-2.219 0-4.158-1.207-5.196-3h-3.804l-1.506-1.503-1.494 1.503-1.48-1.503-1.52 1.503-3-3.032 2.53-2.968h10.274zm7.696 1.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg> Confirme sua senha <span>*</span></p>
            <input style="height: 10px;" type="password" name="senha2" id="senha2"  placeholder="Repita a senha">
        </div>
        <?php
            if(isset($_SESSION['senhas_iguais'])){
                echo($_SESSION['senhas_iguais']);
                unset($_SESSION['senhas_iguais']);
            }
        ?>
        <a href="login.php"><button id="entrar" type="submit"  data-toggle="modal" data-target=".bd-example-modal-sm">CRIAR CONTA</button></a>
        <div class="criarConta">
            <h3>Já tem uma conta?</h3>
            <a href="login.php"><h4 id="login" style="font-size:16px;font-weight:bolder;">REALIZAR LOGIN</h4></a>
        </div>
    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="script/js.js" defer></script>
    <script src="script/preloader.js" defer></script>
</body>
</html>
