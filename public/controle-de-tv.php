<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Controle de TV | 4House</title>
<body class="servicos">
    <main class="controle-de-tv">
    <div class="container-text">
        <h1>Controle de<br>Televisão</h1>
        <p>Com essa função você pode programar o que quer assistir, horário ou um tempo definido para desligar.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+40 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+27 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 30 minutos</small>
            </div>       
            <div class="cards">
                <p>Nivel de conforto</p>
                <small>Médio nível</small>    
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