<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador | 4House</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="pag-login-admin">
    <a href="login.php"><img id="voltar" src="img/tela-login-admin/seta.png" alt="Voltar"></a>
    <form class="container-login-admin" action="entrada-login-adm.php" method="post">
        <div class="top-login">
            <img src="img/tela-login-admin/user.png" alt="user-logo">
            <small>Usuário adminstrador</small>
            <?php
                if(isset($_SESSION['usuario_invalido'])){
                    echo($_SESSION['usuario_invalido']);
                    unset($_SESSION['usuario_invalido']);
                }
            ?>
        </div>
        <div class="main-login">
            <div class="form-group-email">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/></svg>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group-password">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-10 0v-4c0-2.206 1.794-4 4-4s4 1.794 4 4v4h-8z"/></svg>
                <input type="password" name="senha" id="senha" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </div>
        <div class="footer-login">
           <a href="login-atendente.php"><strong>Entrar como atendente</strong></a>
        </div>
    </form>
    <script src="script/js.js" defer></script>
</body>
</html>