
<?php
  if(!isset($_SESSION)){
    session_start();
  }
  if(!isset($_SESSION['idAdministrador'])){
    die("Você precisa estar logado <p><a href=\"login-adm.php\">Acessar página de login</a></p>");
  }
?>