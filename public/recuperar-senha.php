<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha | 4House</title>
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
    <!--FIM FAVICON-->
   <!-- GOOGLE FONTS -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body id="pag-login" class="pag-login pag-recuperar-senha">
<!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="">
    </div>
  </div>
<!-- fim do preloader --> 
    <div class="container-left left-login">
        <div class="text-left-login">
            <h1>Conheça nossos serviços</h1>
            <p>Controle seu lar com apenas alguns cliques</p>
            <small>Atendimento online e automático, tornando sua experiência muito mais dinâmica e objetiva</small>
        </div>
        <img src="img/login/background-login.png" alt="" height="100%" width="100%">
    </div>
    <form class="container-login" action="confirmar-usuario.php" method="post" id="form">
    <div class="top-login login-user">
        
        <h1>RECUPERE SUA SENHA</h1>
        <small>Email:</small>
        <?php
            if(isset($_SESSION['usuario_invalido'])){
                echo($_SESSION['usuario_invalido']);
                unset($_SESSION['usuario_invalido']);
            }
        ?>
        <input type="text" name="email" id="email" required>
        <small id="textRecuperar">Digite o email para prosseguir</small>
        <a href="index.php"><button id="entrar" type="submit">Avançar</button></a>
        <a href="recuperar-senha.php"><h3 id="recuperar-senha">Esqueceu a senha?</h3></a>
        </div>
        <div class="criarConta">
            <h3>Já tem uma conta?</h3>
            <a href="login.php"><strong><h4 id="criar-conta">REALIZAR LOGIN</h4></strong></a>
        </div>
    </form>
    <script src="script/preloader.js" defer></script>
    <script src="js.js"></script>
</body>
</html>
