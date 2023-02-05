<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Som | 4House</title>
<body class="servicos">
    <main class="som">
    <div class="container-text">
        <h1>Som</h1>
        <p>Nossas instalações te proporcionam o controle de som ambiente, podendo ser programadas situações para que elas sejam usadas, por exemplo, uma festa em casa pede um som mais alto, vontade de ouvir um som para relaxar não necessita um som muito alto, mas pede que quem está na sala e quem está no quarto consigam ouvir da mesma forma.</p>
        <div class="cards-servicos">
        <div class="cards">
                <p>Contratações</p>
                <small>+40 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+37 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 30 minutos</small>
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