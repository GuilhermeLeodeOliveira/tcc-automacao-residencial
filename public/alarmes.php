<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Alarmes | 4House</title>
<body class="servicos">
    <main class="alarmes">
    <div class="container-text">
        <h1>Alarmes</h1>
        <p>Para segurança geral, os alarmes são acionados, caso alguém entre no ambiente sem desabilitar o alarme, ele é acionado e só pode ser desligado com a senha pré-definida.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+140 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+103 avaliações positivas</small>
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