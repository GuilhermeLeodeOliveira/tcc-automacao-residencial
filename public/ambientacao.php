<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Ambientação | 4House</title>
<body class="servicos">
    <main class="ambientacao">
    <div class="container-text">
        <h1>Ambientação</h1>
        <p>Pode programar a iluminação da sua casa com apenas um toque, controlar a intensidade das luzes, fazer uma sincronização com cores, e como economia de energia pode ser programado horários do dia para elas serem apagadas totalmente.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+210 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+189 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 4 horas</small>
            </div>       
            <div class="cards">
                <p>Nivel de conforto</p>
                <small>Alto nível</small>    
            </div>    
            <button id="contrate-servico" onclick="$crisp.push(['do', 'chat:open'])" 
            <?php
                if(!isset($_SESSION['idUser'])){
                    echo "data-toggle='modal' data-target='#exampleModalCadastro'>";
                }else{
                    echo ">";
                }
            ?>Contrate 
            agora</button>
        </div>
    </div>
</main>

<?php
    //FOOTER
    include 'includes/footer.php';
?>
</body>
</html>