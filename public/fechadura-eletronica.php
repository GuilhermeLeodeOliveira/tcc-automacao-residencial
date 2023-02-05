<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Fechadura eletrônica | 4House</title>
<body class="servicos">
    <main class="fechadura-eletronica">
    <div class="container-text">
        <h1>Fechadura<br>Eletrônica</h1>
        <p>Como principal característica ela tem a segurança para fechamento de portas, ao ser travada ela só pode ser desbloqueada novamente por quem possui o acesso autorizado.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+270 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+255 avaliações positivas</small>
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