<?php
  if(!isset($_SESSION)){
    session_start();
  }

  if(!isset($_SESSION['idUser'])){
    die("Você precisa estar logado <p><a href=\"index.php\">Acessar página de login</a></p>");
  }
?>