<?php
    include_once('protect-adm.php');
    
    include_once('conexao.php');

    

    if(empty($_GET['filtro'])){
        $filtro = "DESC";
    }else{
        $filtro = $_GET['filtro'];
    }

    if(!empty($_GET['search'])){

        $data = $_GET['search'];
        
        $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser $filtro";

    }else{
        $sql = "SELECT * FROM  users ORDER BY idUser $filtro";
    }
   

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/dashboard.gif" alt="preloader">
    </div>
</div>
<!-- fim do preloader -->   
    <?php
        include_once('includes/header-dashboard.php');
    ?>
    <div class="sidebar">
        <nav>
            <a href="dashboard.php"><img src="img/logo/logo-4house.png" alt="logo 4house"></a>
        </nav>
        <div class="container-sidebar">
            <ul>
                <a href="dashboard.php"><img src="img/dashboard/icon/home.png" alt=""><li class="selected">Interface</li></a>
                <a href="editar-usuarios.php"><img src="img/dashboard/icon/edit.png" alt=""><li class="">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="">Deletar usuários</li></a>
            </ul>
        </div>

        <div class="container-sidebar-opcoes-admin" id="opcoes-admin">
            <hr>
            <ul>
                <p>*Acesso exclusivo</p>
                <a href="dados-atendentes.php"><li class="">Dados atendentes</li></a>               
            </ul>    
        </div>
    </div>
    <main>
        <div class="top-main">      
            <input type="search" class="form-control" id="pesquisa-usuarios" placeholder="Pesquisar usuário...">  
            <button onclick="searchData()">Procurar</button>    
            <label for="option">Filtrar</label>
            <select name="filtro" id="filtro">
                <option value="DESC">Todos</option>
                <option value="ASC">Ordem crescente</option>
                <option value="DESC">Ordem decrescente</option>
            </select>    
        </div>
        <div class="container-main">
            <table border="1">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Data de criação da conta</th>
                    <th>Agendar</th>
                </tr>
                </thead>
                <tbody>

                    <?php
                    
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td data-title='id'>".$user_data['idUser']."</td>";
                                echo "<td data-title='Email'>".$user_data['email']."</td>";
                                echo "<td data-title='Nome'>".$user_data['nome']."</td>";
                                echo "<td data-title='DataNasc'>".$user_data['dataNasc']."</td>";
                                echo "<td data-title='Inicio da conta'>".$user_data['dataCriacaoConta']."</td>";
                                echo "<td data-title='Agendar serviço'><a href='agendamento.php?id=$user_data[idUser]'><svg class='agenda' clip-rule='evenodd' fill-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='m21 4c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-3 11.25c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75zm-11.772-.537c-.151-.135-.228-.321-.228-.509 0-.375.304-.682.683-.682.162 0 .324.057.455.173l.746.665 1.66-1.815c.136-.147.319-.221.504-.221.381 0 .684.307.684.682 0 .163-.059.328-.179.459l-2.116 2.313c-.134.147-.319.222-.504.222-.162 0-.325-.057-.455-.173zm11.772-2.711c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75zm-11.772-1.613v.001c-.151-.135-.228-.322-.228-.509 0-.376.304-.682.683-.682.162 0 .324.057.455.173l.746.664 1.66-1.815c.136-.147.319-.221.504-.221.381 0 .684.308.684.682 0 .164-.059.329-.179.46l-2.116 2.313c-.134.147-.319.221-.504.221-.162 0-.325-.057-.455-.173zm11.772-1.639c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75z' fill-rule='nonzero'/></svg></a></td>";
                            echo "</tr>";     
                        }
                    ?>
                </tbody>
             </table>
        </div>
    </main>

    <script>
        /*SISTEMA DE BUSCA NO DASHBOARD*/
        const search = document.getElementById('pesquisa-usuarios');
        const filtro = document.getElementById('filtro');
        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){   

            const opcaoValor = filtro.options[filtro.selectedIndex].value;
    
            window.location = 'dashboard.php?search='+search.value +'&filtro=' + opcaoValor;
            
        }
    
        /*SISTEMA DE IDENTIFICAÇÃO DO ADMINISTRADOR OU ATENDENTE*/
        const usuario = "<?php echo $_SESSION['usuario']; ?>"

        if(usuario == "Administrador"){
            
            document.getElementById('opcoes-admin').style.visibility = "visible";

        }else{
            document.getElementById('opcoes-admin').style.visibility = "hidden";
        }

    </script>
</body>
</html>