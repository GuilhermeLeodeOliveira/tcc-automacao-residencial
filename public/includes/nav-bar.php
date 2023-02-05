<?php
  include_once('conexao.php');
  session_start();

  if(!empty($_GET['search'])){

    $data = $_GET['search'];
    
    $sqlServices = "SELECT * FROM  servico WHERE nomeServico LIKE '%$data%' or urlServico LIKE '%$data%'";
  
    $resultServices = $conn->query($sqlServices);

    $num_rows_services = $resultServices->num_rows;
  }

  if(!isset($_SESSION['idUser'])){
    echo "<script>console.log('Bem Vindo à 4House')</script>";
  }
  else{
    $idUser = ($_SESSION['idUser']);
    $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
    $result = $conn->query($sqlSelect);

    $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";
    $resultEndereco = $conn->query($sqlSelectEndereco);
      if($result->num_rows > 0){
          while ( $user_data = mysqli_fetch_assoc($result) AND $user_data_endereco = mysqli_fetch_assoc($resultEndereco)){
              /*TABELA USERS*/ 
              $id = $user_data['idUser'];
              $nome = $user_data['nome'];
              $email = $user_data['email'];
              $dataNasc = $user_data['dataNasc'];
              $sexo = $user_data['sexo'];
              $telefone1 = $user_data['telefone1'];
              /*TABELA ENDEREÇOS*/
              $rua = $user_data_endereco['endereco'];
              $numero = $user_data_endereco['numero'];
              $cep = $user_data_endereco['cep'];
              $bairro = $user_data_endereco['bairro'];
              $cidade = $user_data_endereco['cidade'];
          }   
        }
      }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="manifest.webmanifest">
    <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--FIM CSS BOOTSTRAP only -->
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
    <!--FIM FAVICON-->
    <?php
    if(isset($_SESSION['idUser'])){
    ?>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="5f0a251c-2746-4d3e-90a8-0893be62345e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <?php
    }
    ?>
  </head>
<body onload="$crisp.push(['do', 'session:reset'])">
      <!-- início do preloader -->
        <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="preloader">
    </div>
</div>
<span class="circle">
  <svg height="52vw" width="10vw"></svg>
</span>
<!-- fim do preloader --> 
<!-- Modal Trocar de Conta-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="container-login" action="entrada-login.php" method="post">
          <strong><small>Email:</small></strong><br>
          <input type="text" name="email" id="" required><br>
          <strong><small>Senha:</small></strong><br>
          <input type="password" name="senha" required>
          <hr>
          <a href="signup.php"><button type="button" class="btn btn-secondary">Não tenho conta</button></a>
          <a href="index.php"><button type="submit" class="btn btn-primary">Entrar</button></a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- FIM Modal Trocar de Conta-->
<!-- Modal Cadastro -->
<div class="modal fade" id="exampleModalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Cadastro</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Você ainda não possui um cadastro em nosso site. Clique no link abaixo e realize o cadastro para realizar o agendamento.</p>
        <a href="signup.php"><p>Cadastre-se agora</p></a>
      </div>
    </div>
  </div>
</div>
<!-- FIM Modal Cadastro -->
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo/logo-4house.png" width="200vw" alt="Logo 4House"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><img src="img/navbar/home.png" alt="">Inicio</a>
              <hr>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/navbar/services.png" alt="">Serviços
              </a>
              <hr>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               
                <?php

                  $sql = "SELECT * FROM servico;";

                  $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

                  $i = 1;
                  while($row = mysqli_fetch_array($result)){

                    echo "<a class='dropdown-item' href='$row[urlServico].php'>$row[nomeServico]</a>";

                    $i++;
                  }

                ?>
                 
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#sobre"><img src="img/navbar/sobre.png" alt="">Sobre</a>
              <hr>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php"><img src="img/navbar/contato.png" alt="">Fale Conosco</a>
              <hr>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>            
                </a>
                <hr>
                <div class="dropdown-menu dropdown-menu-services" aria-labelledby="navbarDropdown">
                  <div class="navbar-search">
                    <input type="search" class="form-control" id="pesquisa-servicos" placeholder="Pesquisar serviço...">
                    <button onclick="searchData()">Pesquisar</button>
                  </div>
                </div>
              </li>
          </ul>
          <div class="session-user">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Meu perfil</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="perfil.php"><?php if(!isset($_SESSION['idUser'])){echo "<a class='dropdown-item' href='login.php'>Login</a>";}else echo $nome."(Meus dados)";?></a>
                <a class="dropdown-item btn-primary" data-toggle="modal" data-target="#exampleModal">Trocar de conta</a>
                <a class="dropdown-item" href="logout.php">Sair</a>
              </div>
              </li>
          </div>
        </div>
      </nav>
      <?php 
       if(!empty($_GET['search'])){
        echo "<div class='container-modal-services' id='modal'>";
          echo "<div class='modal-services'>";
            echo "<h2>Resultados para <i>'$data'</i></h2>";
            echo "<span onclick='fechar()'><svg clip-rule='evenodd' fill-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z' fill-rule='nonzero'/></svg></span>";
          while($services_data = mysqli_fetch_assoc($resultServices)){
                  echo "<a href='$services_data[urlServico].php'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M13.723 18.654l-3.61 3.609c-2.316 2.315-6.063 2.315-8.378 0-1.12-1.118-1.735-2.606-1.735-4.188 0-1.582.615-3.07 1.734-4.189l4.866-4.865c2.355-2.355 6.114-2.262 8.377 0 .453.453.81.973 1.089 1.527l-1.593 1.592c-.18-.613-.5-1.189-.964-1.652-1.448-1.448-3.93-1.51-5.439-.001l-.001.002-4.867 4.865c-1.5 1.499-1.5 3.941 0 5.44 1.517 1.517 3.958 1.488 5.442 0l2.425-2.424c.993.284 1.791.335 2.654.284zm.161-16.918l-3.574 3.576c.847-.05 1.655 0 2.653.283l2.393-2.389c1.498-1.502 3.94-1.5 5.44-.001 1.517 1.518 1.486 3.959 0 5.442l-4.831 4.831-.003.002c-1.438 1.437-3.886 1.552-5.439-.002-.473-.474-.785-1.042-.956-1.643l-.084.068-1.517 1.515c.28.556.635 1.075 1.088 1.528 2.245 2.245 6.004 2.374 8.378 0l4.832-4.831c2.314-2.316 2.316-6.062-.001-8.377-2.317-2.321-6.067-2.313-8.379-.002z'/></svg><p>".$services_data['nomeServico']."</p></a>";                              
                }
                if($num_rows_services == 0){
                  echo "<p>Lamentamos, nenhum serviço encontrado com esse critério de pesquisa.</p>";
                }
              }
              
          echo "</div>";     
        echo "</div>";     
      ?>

      <script>
        /*SISTEMA DE BUSCA DE SERVIÇOS*/
        const search = document.getElementById('pesquisa-servicos');
        
        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){   
            window.location = 'index.php?search='+search.value;
        }
        const modal = document.getElementById('modal');

        function fechar(){
          modal.classList.add("fechar");
        }
      </script>
</body>
    <script src="script/preloader.js" defer></script>
    <script src="script/js.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>