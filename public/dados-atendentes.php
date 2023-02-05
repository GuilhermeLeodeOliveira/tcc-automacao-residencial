<?php
    include_once('protect-atendente.php');

    include_once('conexao.php');

    if(empty($_GET['filtro'])){
        $filtro = "DESC";
    }else{
        $filtro = $_GET['filtro'];
    }

    if(!empty($_GET['search'])){

        $data = $_GET['search'];
        
        $sql = "SELECT * FROM  atendente WHERE idAtendente LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idAtendente $filtro";

    }else{
        $sql = "SELECT * FROM  atendente ORDER BY idAtendente $filtro";
    }
   

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Atendentes | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body class="pag-dados-atendentes">
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
                <a href="dashboard.php"><img src="img/dashboard/icon/home.png" alt=""><li class="">Interface</li></a>
                <a href="editar-usuarios.php"><img src="img/dashboard/icon/edit.png" alt=""><li class="">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="">Deletar usuários</li></a>
            </ul>    
        </div>

        <div class="container-sidebar-opcoes-admin" id="opcoes-admin">
            <hr>
            <ul>
                <p>*Acesso exclusivo</p>
                <a href="dados-atendentes.php"><li class="selected">Dados atendentes</li></a>              
            </ul>    
        </div>
    </div>
    <main>
        <div class="top-main">      
            <input type="search" class="form-control" id="pesquisa-usuarios" placeholder="Pesquisar atendente...">  
            <button onclick="searchData()">Procurar</button>    
            <label for="option">Filtrar</label>
            <select name="filtro" id="filtro">
                <option value="DESC">Todos</option>
                <option value="ASC">Ordem crescente</option>
                <option value="DESC">Ordem decrescente</option>
            </select>    
        </div>
        <div class="container-main">
            <h2 id="text-atendentes">Atendentes 4House</h2>
            <table border="1">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Deletar</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>

                    <?php
                    
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td data-title='id'>".$user_data['idAtendente']."</td>";
                                echo "<td data-title='Email'>".$user_data['email']."</td>";
                                echo "<td data-title='Nome'>".$user_data['nome']."</td>";                                            
                                echo "<td data-title='Deletar atendente'><a href='deletando-atendente.php?id=$user_data[idAtendente]'><img src='img/dashboard/icon/delete.png' style='cursor:pointer;' width='30px'></a></td>";
                                echo "<td data-title='Editar atendente'><a href='editando-atendente.php?id=$user_data[idAtendente]'><img src='img/dashboard/icon/editar.png' width='30px'</a></td>";
                                
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
    
            window.location = 'dados-atendentes.php?search='+search.value +'&filtro=' + opcaoValor;
            
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