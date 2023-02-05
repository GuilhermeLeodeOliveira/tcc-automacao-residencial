<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Sensor de fumaça | 4House</title>
<body class="servicos">
    <main class="sensor-de-fumaca">
    <div class="container-text">
        <h1>Sensor de<br>Fumaça</h1>
        <p>Para sua maior segurança todas as instalações possuem o sensor de fumaça para caso seja identificado algum sinal de fogo emitir um alarme para que o ambiente seja evacuado.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+90 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+79 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 30 minutos</small>
            </div>       
            <div class="cards">
                <p>Nivel de segurança</p>
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