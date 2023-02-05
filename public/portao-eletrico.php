<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Portão Elétrico | 4House</title>
<body class="servicos">
    <main>
    <div class="container-text">
        <h1>Portão <br>Eletrônico</h1>
        <p>Considerado bem mais seguro que os portões convencionais, os portões e portas eletrônicas, trazem também um conforto maior em dias de chuva, por exemplo, em que não será necessário descer do carro para entrar em casa.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+300 de instalações</small>
            </div> 
            <div class="cards">
                <p>Campeão</p>
                <small>Serviço mais contratado</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 3 horas</small>
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