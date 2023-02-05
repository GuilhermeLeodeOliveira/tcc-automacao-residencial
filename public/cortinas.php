<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Cortinas | 4House</title>
<body class="servicos">
    <main class="cortinas">
    <div class="container-text">
        <h1>Cortinas</h1>
        <p>Para trazer mais agilidade pode ser definido um horário para que as cortinas e persianas se abram ao amanhecer e se fechem ao anoitecer, ao chegar em casa com apenas um toque você já pode subir as persianas.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+20 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+12 avaliações positivas</small>
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