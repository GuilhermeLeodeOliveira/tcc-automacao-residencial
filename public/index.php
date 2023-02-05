
<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<title>Página inicial | 4House</title>
<body>
<!-- <div class="modal-container mostrar" id="modal-pergunta">
  <div class="modal-conteudo">
      <button class="fechar">x</button>
      <img src="img/logo/logo-4house.png" alt="" width="200px">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem reiciendis dolor eos fugit, voluptatum tempora rerum ipsa nam veritatis adipisci iusto aliquid quaerat quisquam ea, ratione minima obcaecati nobis quas!</p>
  </div>
</div>  -->
<main>
  <div class="container-main">
      <img src="img/main/save.png" alt="Vetor Técnologia" class="image">
      <div class="text-main">
          <strong><h1>Automação residencial</h1></strong>
          <small>Serviços para automatizar seu lar</small>
          <p>
          A solução que você precisa para tornar sua casa mais segura e inteligente.
          Contratando nossos serviços você terá a interação total da sua casa em apenas um toque no seu celular.
          Irá facilitar tarefas que dependiam só de você, de acordo com as suas necessidades e vontades.
          <i>A Casa do Futuro</i> pode estar a apenas um clique de você.</p>
          <a href="index.php#sobre"><button>Venha conhecer</button></a>
      </div>
  </div>
</main>
      <section>
        <small id="servicos">Alguns serviços</small>
        <h3>Mais prestados</h3>
        <div class="container-cards">
        <div class="container-section">
          <img src="img/section/ambientacao.png" alt="Ícone ambientação" width="400vw">
          <h2>Iluminação</h2>
          <p>Pode programar a iluminação da sua casa com apenas um toque, controlar a intensidade das luzes, fazer uma sincronização com cores, e como economia de energia pode<a href="ambientacao.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/portao-eletrico.png" alt="Ícone portão elétrico" width="400vw">
          <h2>Portão eletrônico</h2>
          <p>Considerado bem mais seguro que os portões convencionais, os portões e portas eletrônicas, trazem também um conforto maior em dias de chuva, por exemplo, em que não<a href="portao-eletrico.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/sensor-de-proximidade.png" alt="Ícone sensor de proximidade" width="400vw">
          <h2>Sensor de proximidade</h2>
          <p>Para trazer mais agilidade junto a segurança ao chegar, as cancelas de entrada do condomínio são programadas com o sensor de proximidade e as luzes dos postes também<a href="sensor-proximidade.php"><span class="leia">... Leia mais</span></a></p>
        </div>
      </div>
      <!--Mais serviços-->
      <button id="btn-veja-todos-servicos" type="button" data-toggle="collapse" data-target="#mostrar-servicos" aria-controls="mostrar-servicos" aria-expanded="false" aria-label="Toggle navigation">Veja todos</button>
      <div class="collapse container-cards" id="mostrar-servicos">
        <div class="container-section">
          <img src="img/section/sensor-de-fumaca.png" alt="Ícone ambientação" width="400vw">
          <h2>Sensor de fumaça</h2>
          <p>Para sua maior segurança todas as instalações possuem o sensor de fumaça para caso seja identificado algum sinal de fogo emitir um alarme para que o ambiente seja evacuado.<a href="sensor-fumaca.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/controle-de-tv.png" alt="Ícone portão elétrico" width="400vw">
          <h2>Controle de TV</h2>
          <p>Com essa função você pode programar o que quer assistir, horário ou um tempo definido para desligar.<a href="controle-de-tv"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/som.png" alt="Ícone sensor de proximidade" width="400vw">
          <h2>Som</h2>
          <p>Nossas instalações te proporcionam o controle de som ambiente, podendo ser programadas situações para que elas sejam usadas, por exemplo, uma festa em casa pede um som<a href="som.php"><span class="leia">... Leia mais</span></a></p>
        </div>
      <div class="container-section">
          <img src="img/section/cortinas.png" alt="Ícone ambientação" width="400vw">
          <h2>Cortinas</h2>
          <p>Para trazer mais agilidade pode ser definido um horário para que as cortinas e persianas se abram ao amanhecer e se fechem ao anoitecer, ao chegar em casa com apenas um.<a href="cortinas.php"><span class="leia">... Leia mais</span></a></p>
      </div>
      <div class="container-section">
          <img src="img/section/ar-condicionado.png" alt="Ícone ambientação" width="400vw">
          <h2>Ar condicionado</h2>
          <p>Para mais conforto você define em qual temperatura deseja cada cômodo ou pode programar a temperatura do ar de acordo com a temperatura do ambiente, por exemplo se<a href="ar-condicionado.php"><span class="leia">... Leia mais</span></a></p>
      </div>
      <div class="container-section">
          <img src="img/section/camera-seguranca.png" alt="Ícone ambientação" width="400vw">
          <h2>Controle de camêras</h2>
          <p>Para sua segurança apenas pelo seu celular você tem acesso as câmeras de todos os cômodos da sua casa e das áreas comuns do condomínio, as câmeras possuem visão noturna<a href="controle-cameras.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/alarmes.png" alt="Ícone ambientação" width="400vw">
          <h2>Alarmes</h2>
          <p>Para segurança geral, os alarmes são acionados, caso alguém entre no ambiente sem desabilitar o alarme, ele é acionado e só pode ser desligado com a senha pré-definida.<a href="alarmes.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/fechadura-eletronica.png" alt="Ícone ambientação" width="400vw">
          <h2>Fechadura eletrônica</h2>
          <p>Como principal característica ela tem a segurança para fechamento de portas, ao ser travada ela só pode ser desbloqueada novamente por quem possui o acesso autorizado.<a href="fechadura-eletronica.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/home-theater.png" alt="Ícone ambientação" width="400vw">
          <h2>Áudio e vídeo home theater(Cinema em casa)</h2>
          <p>Essa funcionalidade é ideal para o conforto e lazer, para as salas de TV, sala de lazer ou até mesmo sala de cinema, como quiser chamar, fazemos toda a programação<a href="audio-video.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        </div>
      <span id="content-line"></span>
      </section>
      <aside>
        <h3>Imagens de alguns<br>Serviços prestados</h3>
        <div class="container-aside">
          <div class="cards-aside">
            <img src="img/exemplos-servicos/monitoramento-cameras.jpeg" alt="">
            <div class="footer-cards-aside">
              <p>Controle de camêras</p>
              <small>Avenida Paulista, Zona Sul </small>
              <strong>17/02/2022</strong>
            </div>
          </div>
          <div class="cards-aside">
            <img src="img/exemplos-servicos/fechadura-eletronica.jpeg" alt="">
            <div class="footer-cards-aside">
              <p>Fechadura Eletrônica</p>
              <small>Auphaville, Zona Oeste </small>
              <strong>25/08/2021</strong>
            </div>
          </div>
          <div class="cards-aside">
            <img src="img/exemplos-servicos/automação-e-iluminação.jpg" alt="">
            <div class="footer-cards-aside">
              <p>Iluminação</p>
              <small>Tatuapé, Zona Leste </small>
              <strong>05/10/2022</strong>
            </div>
          </div>
        </div>
      </aside>
      <article id="sobre">
        <div class="container-article primary-img-article">
          <img src="img/section/equipamentos-automacao-residencial 1.jpg" alt="" width="50%">
          <div class="container-article-text">
            <small>Um pouco de nós</small>
            <h3>Sobre nós</h3>
            <p>Nós somos uma empresa que partiu de uma ideia de 4 pessoas, o qual originou o nome 4House. Para explicar melhor, house seria sobre o serviço que prestamos em relação a automação residencial, onde melhoramos a segurança com câmeras, alarmes e afins, e também visamos um maior conforto com a automatização dos ambientes em que mais usamos na nossa casa, buscando mais praticidade e funcionalidade.</p>
            <div class="cards">
              <div class="card">
                <img src="img/article/cards/global.png" alt="">
                <p>São Paulo-SP</p>
                <small>Zona leste</small>
              </div>
              <div class="card">
                <img src="img/article/cards/classificação.png" alt="">
                <p>Avaliação</p>
                <small>+1500 clientes satisfeitos</small>
              </div>
              <div class="card">
                <img src="img/article/cards/premio.png" alt="">
                <p>Eleito</p>
                <small><i>Melhor empresa<br> no ramo 2021</i></small>
              </div>
              <div class="card">
                <img src="img/article/cards/sustentabilidade.png" alt="">
                <p>Sustentabilidade</p>
                <small>Prevervação do meio ambiente</small>
              </div>
            </div>
          </div>
       </div>
       <h4 id="text-figure"><strong>Veja oque nossos</strong><br> clientes acham sobre nós</h4>
      </article>
      <figure>
        <div class="card-figure first">
          <img src="img/figure/aspas.png" alt="">
          <p>Amei o serviço, minha casa já tinha sido furtada diversas vezes, depois que contratei o serviço de vocês eu e minha família nos sentimos mais seguros. Contratei o portão elétrico e esse mês irei contratar mais serviços, super recomendooo!!</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user1.png" alt="">
              <small>Amanda Ribeiro Silva</small>
            </div>
        </div>
      <div class="card-figure second">
          <img src="img/figure/aspas.png" alt="">
          <p>Automatizei toda a minha casa, após a contratação dos serviços eu sinto que minha rotina se tornou mais dinâmica, meus vizinhos já contrataram serviços por minha indicação!</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user2.jpeg" alt="">
              <small>Andrey de Mendonça</small>
            </div>
        </div>
      <div class="card-figure three">
          <img src="img/figure/aspas.png" alt="">
          <p>Sem dúvidas a melhor empresa no ramo da automação residencial, atendimento super dinâmico e objetivo sem falar dos serviços de alta qualidade ,muito topp mesmo.</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user3.jpg" alt="">
              <small>Martha Costa Santana</small>
            </div>
        </div>
      <div class="card-figure four">
          <img src="img/figure/aspas.png" alt="">
          <p>Sou cliente da empresa há pouco mais de um ano e nunca tive problemas, os atendentes são super prestativos e educados. Espero que vocês ampliem a zona de prestação de serviços, pois tenho parentes que também querem automatizar suas casas com a 4House.</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user4.jpg" alt="">
              <small>João Miguel Souza</small>
            </div>
        </div>
      </figure>
  <?php
    //FOOTER
    include 'includes/footer.php';
  ?>
  <script>
    // MODAL INDEX.PHP//

    // function iniciaModal(modalID) {
		// 	if(localStorage.fechaModal !== modalID) {
		// 		const modal = document.getElementById(modalID);
		// 		if(modal) {
		// 			modal.classList.add('mostrar');
		// 			modal.addEventListener('click', (e) => {
		// 				if(e.target.id == modalID || e.target.className == 'fechar') {
		// 					modal.classList.remove('mostrar');
		// 					localStorage.fechaModal = modalID;
		// 				}
		// 			});
		// 		}
		// 	}
		// }

		
    // iniciaModal('modal-pergunta');
    
  </script>
</body>
</html>