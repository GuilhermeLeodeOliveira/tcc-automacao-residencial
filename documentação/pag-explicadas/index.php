<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $bdname = "monografia";
 
    $conn = new mysqli($servername, $username, $pass, $bdname); 
 
    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "SELECT * FROM cadastros";

    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Desativado</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

    <h1>Faça o seu Cadastro</h1>

    <form action="entrada.php" method="post" class="formulario">

        <label for="">Nome:</label>
        <input type="text" name="nome" id="" placeholder="Ex: João da Silva">
        <br/> <br/>

        <label for="">CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="123.456.789/00">
        <br/> <br/>

        <label for="">Telefone:</label>
        <input type="text" name="tel" id="tel" placeholder="(11)94002-8922">
        <br/> <br/>

        <label for="">E-mail:</label>
        <input type="email" name="email" id="" placeholder="jsilva@gmail.com">
        <br/> <br/>

        <label for="">Senha:</label>
        <input type="password" name="senha" id="" placeholder="********">
        <br/> <br/>

        <input type="submit" value="Enviar">

    </form>

    <br><br><br>
    <h2>Cadastros</h2>

    <table border="1">
    
        <tr class="">
            <td>NOME</td>
            <td>EMAIL</td>
            <td>CPF</td>
        </tr>
        
        <?php

            $i=0;
            while($row = mysqli_fetch_array($result)) {
            
                
        ?>
        
        <tr>
            <td><?php echo $row["nome"]; ?></td>
            
            <td><?php echo $row["email"]; ?></td>
            
            <td><?php echo $row["cpf"]; ?></td>
                    
        </tr>
        
        <?php
                $i++;
            }
        ?>
    
    </table>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery.mask.js"></script>
    <script>
        $(document).ready(function () {
            $('#cpf').mask('000.000.000/00');
            $('#tel').mask('(00) 00000-0000');
        });
    </script>

</body>
</html>
