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
    <title>Deletar Usuários | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
        <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
        <img src="img/gif/dashboard.gif" alt="preloader">
        </div>
    </div>
    <!--DELETAR USUARIO -->
    <!-- <a href='deletar-usuarios.php?id=$user_data[idUser]'> -->

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
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="selected">Deletar usuários</li></a>
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
                    <th>Excluir</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                    ?>
                        <tr> 
                            <td data-title="id"> <?php echo $user_data['idUser']; ?></td>
                            <td data-title="Email"><?php echo $user_data['email']; ?></td>
                            <td data-title="Nome"><?php echo $user_data['nome']; ?></td>
                            <td data-title="DataNasc"><?php echo $user_data['dataNasc']; ?></td>
                            <td data-title="Inicio da conta"><?php echo $user_data['dataCriacaoConta']; ?></td>
                            <td data-title="Deletar usuário"><a href="deletando-usuario.php?id=<?php echo $user_data['idUser']; ?>"><img src="img/dashboard/icon/delete.png" class="agenda" style="cursor:pointer;"></a></td>                                         
                        </tr>
                    <?php
                        }                     
                    ?>    
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        

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
    
            window.location = 'deletar-usuarios.php?search='+search.value +'&filtro=' + opcaoValor;
            
        }
    
        /*SISTEMA DE IDENTIFICAÇÃO DO ADMINISTRADOR OU ATENDENTE*/
        const usuario = "<?php echo $_SESSION['usuario']; ?>"

        if(usuario == "Administrador"){
            
            document.getElementById('opcoes-admin').style.visibility = "visible";

        }else{
            document.getElementById('opcoes-admin').style.visibility = "hidden";
        }
        
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</body>
</html>