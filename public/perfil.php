<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<title>Meu perfil | 4House</title>
</head>
<body class="pag-perfil">
    <main class="session-perfil">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Meus dados
            </div>
            <ul class="list-group list-group-flush">
                <a href="perfil.php"><li class="list-group-item selected">Informações pessoais</li></a>
                <a href="servicos-contratados.php"><li class="list-group-item">Serviços contratados</li></a>
            </ul>
        </div>
        <div class="container-dados-pessoais informacoes-user">
            <h2><span></span>Dados pessoais</h2>
            <ul>
                <div class="top-informacoes">

                    <?php

                        if($sexo=='Masculino'){
                            echo "<img src='img/perfil/user.png' alt='Usuário'>";
                        }else{
                            echo "<img src='img/perfil/user2.png' alt='Usuário'>";

                        }                    
                        
                    ?>

                    <div class="text-top">
                        <h3 class="dados-user"><?php echo $nome;?></h3>
                        <small class="dados-user"><?php echo $email;?></small>
                    </div>
                </div>
                <!--Função para calcular idade do usuário-->
                <?php
                 //FUNÇÃO CALCULAR IDADE DO USUARIO
                  $dataNascimento = $_SESSION['dataNasc'];
                  $data = new DateTime($dataNascimento);
                  $resultado = $data->diff(new DateTime( date('Y-m-d')));
                 //FIM FUNÇÃO
                ?>
                <div class="main-informacoes">
                    <li>Idade<span class="dados-user"><?php echo $resultado->format( '%Y anos' );?></span></li>
                    <li>Telefone<span class="dados-user"><?php echo $telefone1;?></span></li>
                    <li>Sexo<span class="dados-user"><?php echo $sexo;?></span></li>
                    <li>Cidade<span class="dados-user"><?php echo $cidade;?></span></li>                    
                </div>
                    <li class="endereco">Endereço <span class="dados-user"><?php echo $rua;?>,<?php echo $bairro;?> Nº<?php echo $numero;?> - <?php echo $cep;?></span></li>   
                <div class="button-card">
                    <?php
                    echo "<a href='edit-me.php?id= $idUser'><button class='editar-usuario' type='submit'>Editar</button></a>";
                    echo "<button class='deletar-usuario btn btn-primary' type='button' data-toggle='modal' data-target='#exampleModalCenter'>Excluir conta</button>";

                    echo"<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'>Deletar usuário</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close' style='border:none !important;'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                <div class='modal-body'>
                                    <p>Tem certeza que deseja excluir o usuário <strong>$nome</strong>?</p>
                                </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                                        <a href='delete-me.php?id=$idUser'><button type='button' class='btn btn-primary' style='background-color:red !important; border:none !important;'>Excluir</button></a>
                                    </div>
                                </div>
                            </div>
                        </div> ";
                    ?>
                </div>
            </ul>
        </div>
    </main>
</body>
</html>