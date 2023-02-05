<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | 4House</title>
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
<body id="pag-login" class="pag-login">
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
    <form class="container-login" action="entrada-login.php" method="post" id="form">
        <div class="top-login login-user">
            <h1>LOGIN</h1>  
            <?php
                if(isset($_SESSION['usuario_invalido'])){
                    echo($_SESSION['usuario_invalido']);
                    unset($_SESSION['usuario_invalido']);
                }
            ?>
            <div class="form-group-email">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/></svg>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group-password">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-10 0v-4c0-2.206 1.794-4 4-4s4 1.794 4 4v4h-8z"/></svg>
                <input type="password" id="senha" name="senha" placeholder="Password" required >
                <img id="eyeSvg" onclick="eyeCLick()" src="img/input-senha/eye-open.svg" alt="">
            </div>
            <a href="index.php"><button id="entrar" type="submit">ENTRAR</button></a>
            <a href="recuperar-senha.php"><h3 id="recuperar-senha">Esqueceu a senha?</h3></a>
        </div>
       <hr>
        <div class="criarConta">
            <h3>É novo por aqui?</h3>
            <a href="signup.php"><strong><h4 id="criar-conta">CRIAR CONTA</h4></strong></a>
        </div>
        <a href="index.php"><p class="entrada-administrador">Entrar como visitante</p></a>
    </form>
    <script src="script/preloader.js" defer></script>
    <script>
        const passwordInput = document.getElementById("senha");
        const eyeSvg= document.getElementById("eyeSvg");

        function eyeCLick(){
            let inputTypeIsPassword = passwordInput.type == "password"

            if (inputTypeIsPassword){
                showPassword();
            } else if(passwordInput.type == "text"){
                hidePassword();
            }   
        }
        function showPassword(){
            passwordInput.setAttribute("type", "text");
            eyeSvg.setAttribute("src", "img/input-senha/eye-closed.svg")
        }
        function hidePassword(){
            passwordInput.setAttribute("type", "password");
            eyeSvg.setAttribute("src", "img/input-senha/eye-open.svg")
        }
    </script>
</body>
</html>
