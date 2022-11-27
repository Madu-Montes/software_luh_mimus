<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Luh Mimu's</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">

    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="../index.html"><img src="../images/logo.jfif" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--Menu -->
                <div class="sidebar-menu">
                    <ul class="menu">

                        <!--Dashboard -->
                        <li class="sidebar-item">
                            <a href="dashboard.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!--Calendário -->
                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-calendar"></i>
                                <span>Calendário</span>
                            </a>
                        </li>

                        <!--Clientes -->
                        <li class="sidebar-item  ">
                            <a href="./clientes.html" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Clientes</span>
                            </a>
                        </li>

                        <!--Anúncios -->
                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-megaphone"></i>
                                <span>Anúncios</span>
                            </a>
                        </li>

                        <!--Pedidos -->
                        <li class="sidebar-item  ">
                            <a href="pedidos.html" class='sidebar-link'>
                                <i class="bi bi-basket2-fill"></i>   
                                <span>Pedidos</span>
                            </a>
                        </li>

                        <!--Encomendas -->
                        <li class="sidebar-item active">
                            <a href="encomendas.html" class='sidebar-link'>
                                <i class="bi bi-basket2-fill"></i>   
                                <span>Encomendas</span>
                            </a>
                        </li>

                        <!--Estoque -->
                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-box-seam"></i>
                                <span>Estoque</span>
                            </a>
                        </li>

                        <!--Finanças -->
                        <li class="sidebar-item  ">
                            <a href="financas.html" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Finanças</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>


        <header class="header-bar">

            <div class="icones-topo">
                <a class="notification" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bell" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                </a>
                <a class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </a>

                <div class="btn-group mb-1">
                    <div class="dropdown dropdown-color-icon">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButtonEmoji"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span Class="me-50"><img src="../images/user.png" alt="" width="32" height="32"
                                    class="rounded-circle me-2"></span>nome do usuário
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji"></span>
                                <div class="form-check form-switch custom-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Tema escuro

                                    </label>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji"><svg style="width: 21px;"
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                    </svg></span>
                                    ‎ ‎ ‎ ‎ Configurações</a>
                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji"><svg style="width: 21px;"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-question-diamond" viewBox="0 0 16 16">
                                        <path
                                            d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z" />
                                        <path
                                            d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                    </svg></span>
                                    ‎ ‎ ‎ ‎ Ajuda</a>
                                    <hr>
                                    <a class="dropdown-item" href="./index.html"><span class="dropdown-item-emoji"><svg style="width: 21px;"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg></span>
                                    ‎ ‎ ‎ ‎ Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Lista de usuários</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Todos (x)
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Excluir</th>
                                        <th>Foto</th>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>CPF</th>
                                        <th>Contato</th>
                                        <th>Data de Nascimento</th>
                                        <th>Senha</th>
                                        <th>CEP</th>
                                        <th>Nº</th>
                                        <th>Complemento</th>
                                    </tr>
                                </thead>

                                

                                <tbody>
                                    <tr>

                                        <!-- Button trigger modal -->
                                        <td><button type="button" class="btn btn-primary btn-lg icon"
                                                data-bs-toggle="modal" data-bs-target="#modalId"><i
                                                    class="bi bi-trash"></i>
                                            </button></td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalId" tabindex="-1" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Excluir?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            Tem certeza que deseja excluir esse perfil?
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-dark">Excluir</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            var modalId = document.getElementById('modalId');

                                            modalId.addEventListener('show.bs.modal', function (event) {
                                                // Button that triggered the modal
                                                let button = event.relatedTarget;
                                                // Extract info from data-bs-* attributes
                                                let recipient = button.getAttribute('data-bs-whatever');

                                                // Use above variables to manipulate the DOM
                                            });
                                        </script>

                                        <!--Quando selecionar aparecer modal de "editar perfil?-->
                                        <td><img src="" alt=""></td>
                                        <td>00000</td>
                                        <td>Paula Sousa</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>1111111</td>
                                        <td>00</td>
                                        <td>rua sem saida</td>
                                        </tr>
                
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p>2022 &copy; Luh Mimu's</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="../js/main.js"></script>
</body>

</html>

<?php
    include'conn_banco.php';

    $dados_usuarios = $sql->query("SELECT * FROM User_Cdst_Site");
    
    
    while ($linha = mysqli_fetch_array($dados_usuarios)){
        $id = $linha['id_UserCdstSite'];
        $cpf = $linha['cpf_UserCdstSite'];
        $nome = $linha['nome_UserCdstSite'];
        $email = $linha['email_UserCdstSite'];
        $dtn = $linha['dtn_UserCdstSite'];
        $senha = $linha['senha_UserCdstSite'];
        $celular = $linha['celular_UserCdstSite'];

        
        echo"

        <tr>

        
            <td>
            <a href='excluir.php?cpf=$cpf' onclick=\"return confirm('Quer mesmo apagar esses dados!!!');\">
            Excluir</a>
            </td>

            <td>
            <a href='update.php?cpf=$cpf' onclick=\"return confirm('Quer mesmo alterar esses dados!!!');\">
            Alterar</a>
            </td>
        
        <td>imagem</td>
        <td>$id</td>
        <td>$nome</td>
        <td>$email</td>
        <td>$cpf</td>
        <td>$celular</td>
        <td>$dtn</td>
        <td>$senha</td>
        <td>...</td>
        <td>...</td>
        <td>...</td>
        <td>
           
        </td>
 
        </tr>";

    }
        echo"</table>";
?>