<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $bdname = "monografia";
 
    $conn = new mysqli($servername, $username, $pass, $bdname); 
 
    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadastros VALUES (DEFAULT, '$nome', '$cpf', '$tel', '$email', '$senha');";

    $result = $conn->query($sql);

    header("location:index.php");

?>