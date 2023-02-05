<?php
  include_once('conexao.php');
?>
<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Serviços contratados | 4House</title>
</head>
<body class="pag-perfil servicos-contratados">
    <main>
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Meus dados
            </div>
                <ul class="list-group list-group-flush">
                    <a href="perfil.php"><li class="list-group-item">Informações pessoais</li></a>
                    <a href="servicos-contratados.php"><li class="list-group-item selected">Serviços contratados</li></a>
                </ul>
        </div>
        <div class="container-dados-pessoais">
            <h2 id="title-services">Serviços contratados</h2> 
            <div class="container-servicos-contratados">
                <?php 

                $idUser = $_SESSION['idUser'];

                    $sql = "SELECT s.nomeServico, a.idAgendamento, a.dataAgendamento, a.horaAgendamento, a.statusServico, e.endereco, e.numero, e.cep, e.bairro FROM agendamento a 
                            JOIN servico s ON s.idServico = a.idServico
                            JOIN endereco e ON e.idEndereco = a.idEndereco
                            WHERE  a.idUser = '$idUser'";

                    $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);


                    $num_rows_services_contrated = $result->num_rows;

                    $i = 1;
                    while($row = mysqli_fetch_array($result)){
                        
                        ?>
                <ul>
                    <small><?php echo $i; ?>º Serviço</small>
                    <span class="dados-user nome-servico"><?php echo $row['nomeServico']; ?></span>
                    <hr>
                    <li>Data agendada<span class="dados-user data-agendada"><?php echo $row['dataAgendamento']; ?></span></li>
                    <li>Horário agendado<span class="dados-user hora-agendada"><?php echo $row['horaAgendamento']; ?></span></li>
                    <span class="dados-user status-servico"><?php echo $row['statusServico']; ?></span>
                    <li>Endereço<span class="dados-user endereco"><?php echo $row['endereco']; ?>,<?php echo $row['bairro']; ?> Nº<?php echo $row['numero']; ?> - <?php echo $row['cep']; ?></span></li>
                </ul>
                
                <?php
                        $i++;
                    }
                ?>
                <?php
                    if($num_rows_services_contrated == 0){
                     echo "<h4>Não foi encontrado nenhum serviço contratado, acesse nossa página de serviços e realize o agendamento agora mesmo!<br><a href='index.php#servicos'><p>Contrate já</p></a></h4>";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>