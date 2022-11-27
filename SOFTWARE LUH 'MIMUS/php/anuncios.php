<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anúncios - Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/iconly/bold.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/anuncios.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dashboard.html"><img src="../images/logo.jfif" alt="Logo" srcset=""></a>
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
                            <a href="clientes.html" class='sidebar-link'>
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

                        <!--Encomendas -->
                        <li class="sidebar-item">
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


        <!-----Fim do Menu Lateral------->
        <header class="header-bar">
            <div class="icones-topo">
                <a class="notification" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bell" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                </a>
                <div class="btn-group mb-1">
                    <div class="btn-group mb-1">
                        <div class="dropdown dropdown-color-icon user">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButtonEmoji"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:40">
                                <span Class="me-50"><img src="../images/user.png" alt="" width="32" height="32"
                                        class="rounded-circle me-2"></span>nome do usuário
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                                <a class="dropdown-item" href="#"><span class="dropdown-item-emoji"></span>
                                    <div class="form-check form-switch custom-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Tema escuro</label>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#"><span class="dropdown-item-emoji"><svg
                                            style="width: 21px;" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg></span>
                                    ‎ ‎ ‎ ‎ Configurações</a>
                                <a class="dropdown-item" href="./manual.html"><span class="dropdown-item-emoji"><svg
                                            style="width: 21px;" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-question-diamond"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg></span>
                                    ‎ ‎ ‎ ‎ Ajuda</a>
                                <hr>
                                <a class="dropdown-item" href="../index.html"><span class="dropdown-item-emoji"><svg
                                            style="width: 21px;" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-box-arrow-right"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg></span>
                                    ‎ ‎ ‎ ‎ Sair</a>
                            </div>
                        </div>
                    </div>
                </div>
        </header>

        <!---Fim do header do topo-->
        <br>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="modal fade" id="modalId2" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Excluir anúncio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="mb-3">
                                    Deseja realmente excluir esse anúncio da página?

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Excluir</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Adicionar novo anúncio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="add_anuncio.php" method="post" enctype= "multipart/form-data">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelpId"
                                                placeholder="Ex: Brigadeiro">

                                        </div>
                                        <div class="mb-3">
                                            <label for="valor" class="form-label">Preço</label>
                                            <input type="text" class="form-control" name="valor" id="valor" aria-describedby="emailHelpId"
                                                placeholder="R$90,00">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="avatar" class="form-label">Adicione a imagem</label>
                                            <input type="file" class="form-control" name="avatar" id="avatar" aria-describedby="emailHelpId"
                                                placeholder="Ex: Brigadeiro de chocolate">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-dark">Salvar</button>
                                            <button type="reset" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
    
                                        </div>
                                    </div>   
                                </div>    
                        </form>
                    </div>
                </div>
            </div>

            <?php
                 include'conn_banco.php';
                 $dados_anuncios = $sql->query("SELECT * FROM anuncios");
                 $total = mysqli_num_rows($dados_anuncios);
            ?>


            <div class="page-heading">
                <h3>Anúncios para o site</h3>
                <nav class="nav justify-content-center ">
                    <a class="nav-link add" data-bs-toggle="modal" data-bs-target="#modalId"> + Adicionar </a>
                    <a class="nav-link exclui" data-bs-toggle="modal" data-bs-target="#modalId2">Excluir</a>
                    <a class="nav-link cat" href="./pedidos-entregue.html">Categorias</a>
                </nav>
            </div>
            <br>
            <p>Todos(<?php echo $total; ?>)</p>

            <!-- Anuncios já cadastrados -->
            <section id="groups">
                <div class="row ">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="section-title text-uppercase">DOCES</h4>
                    </div>
                </div>

            </section>

            <section id="groups">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <div class="row match-height">

                            <?php while ($linha = mysqli_fetch_assoc($dados_anuncios)){ ?>
                                <div class="col-4">
                                    <div class="card-group">
                                        <div class="card">
                                            <div class="card-content">
                                                <img class="card img-fluid" src="../images/anuncio.png"
                                                    alt="Card image cap" width="180px">
                                                <div class="card-body">

                                                    <!-- nome -->
                                                    <h4 class="card-title">
                                                        <?php echo $nome = $linha['nome_anuncios'];?>
                                                    </h4>
                                                    
                                                    <!-- preço -->
                                                    <p class="card-text">
                                                    <?php echo $valor = $linha['valor_anuncios'];?>

                                                    
                                                </div>
                                            </div>
                                        </div>         
                                    </div>      
                                </div>     
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>

              <!-- $id = $linha['id_anuncios'];
                     
                    
                     $desc = $linha['desc_anuncios'];
                     $avatar = $linha['img_anuncios']; -->
       
       
        </div>
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

        <script src="../vendors/apexcharts/apexcharts.js"></script>
        <script src="../js/pages/dashboard.js"></script>

        <script src="../js/main.js"></script>
</body>

</html>