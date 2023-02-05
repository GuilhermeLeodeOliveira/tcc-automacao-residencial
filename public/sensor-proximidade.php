<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Sensor de proximidade | 4House</title>
<body class="servicos">
    <main class="sensor-de-proximidade">
    <div class="container-text">
        <h1>Sensor de<br>Proximidade</h1>
        <p>Para trazer mais agilidade junto a segurança ao chegar, as cancelas de entrada do condomínio são programadas com o sensor de proximidade e as luzes dos postes também, ao identificar o carro previamente cadastrado ela já é aberta e as luzes acendem para sua passagem, sem precisar aguardar o porteiro te reconhecer e abrir para você chegar em casa.</p>
        <div class="cards-servicos">
        <div class="cards">
                <p>Contratações</p>
                <small>+120 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+100 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 1 hora</small>
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