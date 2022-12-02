<?php
include 'conn_banco.php';
include '../includes/menuLateral.php';

$sql_code_categories = "SELECT * FROM categorias ORDER BY nome_categorias ASC";
$sql_query_categories = $sql->query($sql_code_categories) or die($sql->error);
?>

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
        <!-- Header -->
        <?php 
            include '../includes/header.php';
        ?>

        <!---Fim do header do topo-->
        <br>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!--Modal de adicionar anúncio-->
            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Adicionar novo anúncio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Formulário de cadastro do anuncios -->
                        <form action="add_anuncio.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <!-- nome -->
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro">
                                    </div>
                                    <!-- preço -->
                                    <div class="mb-3">
                                        <label for="valor" class="form-label">Preço:</label>
                                        <input type="text" class="form-control" name="valor" id="valor" aria-describedby="emailHelpId" placeholder="R$90,00">
                                    </div>
                                    <!-- descrição -->
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                                    </div>
                                    <!-- select categorias -->
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Categoria:</label><br>
                                        <select name="categorias" id="categorias">
                                            <option value="">Selecione uma categoria</option>
                                            <?php while ($categorias = $sql_query_categories->fetch_assoc()) { ?>
                                                <option value="<?php echo $categorias['id_categorias']; ?>">
                                                    <?php echo $categorias['nome_categorias']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- imagens -->
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Adicione a imagem</label>
                                        <input type="file" class="form-control" name="avatar" id="avatar" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro de chocolate">
                                    </div>
                                    <!-- botão -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-dark">Salvar</button>
                                        <button type="reset" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Fim formulário -->

                        <?php
                        //Selecioa todos os dados da tabela anuncios
                        $dados_anuncios = $sql->query("SELECT * FROM anuncios");
                        //calcula o número de linhas, ou seja, a qtd de resgistros
                        $total = mysqli_num_rows($dados_anuncios);
                        ?>

                    </div>
                </div>
            </div>
            <!--fim do modal de adicionar-->

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Anúncios para o site</h3>
                        </div>
                    </div>
                </div>
                <nav class="nav justify-content-center ">
                    <a class="nav-link add" data-bs-toggle="modal" data-bs-target="#modalId"> + Adicionar </a>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle cat" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Bolos</a></li>
                            <li><a class="dropdown-item" href="#">Doces</a></li>
                            <li><a class="dropdown-item" href="#">Salgados</a></li>
                            <li><a class="dropdown-item" href="#">Personalizados</a></li>
                            <li><a class="dropdown-item" href="#">Kit festa</a></li>
                            <!--Tem uma tela kitfesta.html os kits variam todo mê será que dá para deixar uma aba para ela fazer isso?-->
                        </ul>
                    </div>
                </nav>
            </div>
            <br>

            <!-- Total de registros -->
            <p>Todos(<?php echo $total; ?>)</p>

            <!-- Filtro -->
            <section id="groups" <?php if (isset($_GET['filtro'])) echo "disabled"; ?>>
                <div class="row ">
                    <div class="col-12 mt-3 mb-1">
                        <form action="" method="get">
                            <!-- Select do filtro -->
                            <select name="filtro" id="categorias">
                                <?php
                                $code_categories = "SELECT * FROM categorias ORDER BY nome_categorias ASC";
                                $query_categories = $sql->query($code_categories) or die($sql->error);
                                ?>

                                <?php while ($FiltroCategorias = $query_categories->fetch_assoc()) { ?>

                                    <option id="options-categorias" <?php if (isset($_GET['filtro']) && $_GET['filtro'] == $FiltroCategorias['id_categorias']) echo "selected"; ?> value="<?php echo $FiltroCategorias['id_categorias']; ?>">
                                        <?php echo $FiltroCategorias['nome_categorias']; ?></option>
                                <?php } ?>
                            </select>
                            <button type="submit">Filtrar</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Fim filtro -->

            <!-- Vitrine de produtos cadastrados -->
            <section id="groups">
                <div class="row">
                    <?php while ($linha = mysqli_fetch_assoc($dados_anuncios)) { ?>
                        <div class="col-4">
                            <div class="card-group">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- Imagens já cadastradas -->
                                        <img class="card img-fluid" src="../<?php echo $avatar = $linha['img_anuncios']; ?>" alt="Card image cap" width="180px">

                                        <div class="card-body">

                                            <!-- nome já cadastrados -->
                                            <h4 class="card-title">
                                                <?php echo $nome = $linha['nome_anuncios']; ?>
                                            </h4>

                                            <!-- preço já cadastrados -->
                                            <p class="card-text">
                                                <?php echo $valor = $linha['valor_anuncios']; ?>
                                            <p>



                                                <!-- Modal de edição -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#modaledit">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>

                                            <!-- Modal Body -->
                                            <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTitleId">Editar anúncio</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Nome</label>
                                                                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro">

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Preço</label>
                                                                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="R$90,00">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Adicione a
                                                                        imagem</label>
                                                                    <input type="file" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro de chocolate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Salvar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal de edição acima -->

                                            <!-- Button de excluir abaixo -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#modalexcl">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalexcl" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTitleId">Atenção!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                Deseja mesmo excluir este anúncio?
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="button" class="btn btn-primary">Excluir</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                var modalId = document.getElementById('modalId');

                                                modalId.addEventListener('show.bs.modal', function(event) {
                                                    // Button that triggered the modal
                                                    let button = event.relatedTarget;
                                                    // Extract info from data-bs-* attributes
                                                    let recipient = button.getAttribute('data-bs-whatever');

                                                    // Use above variables to manipulate the DOM
                                                });
                                            </script>
                                            <!-- Modal de excluir acima -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>

            <!-- footer -->
            <?php 
                include '../includes/footer.php';
            ?>
            
        <script src="../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>

        <script src="../vendors/apexcharts/apexcharts.js"></script>
        <script src="../js/pages/dashboard.js"></script>

        <script src="../js/main.js"></script>
</body>

</html>