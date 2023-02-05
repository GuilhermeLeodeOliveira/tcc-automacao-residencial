<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Controle de camêras | 4House</title>
<body class="servicos">
    <main class="controle-de-cameras">
    <div class="container-text">
        <h1>Controle de<br>Camêras</h1>
        <p>Para sua segurança apenas pelo seu celular você tem acesso as câmeras de todos os cômodos da sua casa e das áreas comuns do condomínio, as câmeras possuem visão noturna para que não haja problemas ao ver as gravações noturnas.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+230 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+205 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 2 horas</small>
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