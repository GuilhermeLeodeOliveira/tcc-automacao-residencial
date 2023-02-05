<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Áudio e vídeo (Cinema em casa)| 4House</title>
<body class="servicos">
    <main class="audio-video">
    <div class="container-text">
        <h1>Aúdio e Vídeo<br> Home Theater<br>Cinema em casa</h1>
        <p>Essa funcionalidade é ideal para o conforto e lazer, para as salas de TV, sala de lazer ou até mesmo sala de cinema, como quiser chamar, fazemos toda a programação para que o som e os efeitos estejam de acordo com o que está sendo assistido, com tecnologia de som 8-D para que todas as sensações possam ser vividas na sala, dando a sensação de estar na cena.</p>
        <div class="cards-servicos">
            <div class="cards">
                <p>Contratações</p>
                <small>+80 de instalações</small>
            </div> 
            <div class="cards">
                <p>Avaliação</p>
                <small>+75 avaliações positivas</small>
            </div>    
            <div class="cards">
                <p>Instalação</p>
                <small>Tempo médio de 1 hora e 30 minutos</small>
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