<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Ar condicionado | 4House</title>
<body class="servicos">
    <main class="ar-condicionado">
    <div class="container-text">
        <h1>Ar<br>Condicionado</h1>
        <p>Para mais conforto você define em qual temperatura deseja cada cômodo ou pode programar a temperatura do ar de acordo com a temperatura do ambiente, por exemplo se estiver um dia muito quente ele já é programado para estar com o ar condicionado mais fresco.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+90 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+67 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 1 hora e 30 minutos</small>
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