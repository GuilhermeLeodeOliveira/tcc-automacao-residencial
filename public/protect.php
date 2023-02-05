<?php
  if(!isset($_SESSION)){
    session_start();
  }

  if(!isset($_SESSION['nome'])){
    die("Você precisa estar logado <p><a href=\"login.php\">Acessar página de login</a></p>");
  }
?>