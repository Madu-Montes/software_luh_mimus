<?php

if(!isset($_SESSION)){
    session_start();
}

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
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="stylesheet" href="../vendors/iconly/bold.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/anuncios.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/dashboard.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/stylecardapio.css">

</head>

<body>
    <!-- Header -->
    <?php
    include '../includes/MenuLateral.php';
    ?>

    <!-----Header------->
    <?php
    include '../includes/header.php';
    ?>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/main.js"></script>

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
                        <h5 class="modal-title" id="modalTitleId">Adicionar novo anúncio ao site</h5>
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
                                    <label for="valor" class="form-label">Preço: (por cento)</label>
                                    <input type="text" class="form-control" name="valor" id="valor" aria-describedby="emailHelpId" placeholder="R$90,00">
                                </div>
                                <!-- descrição -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
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
                        <h3>Cadastre os doces</h3>
                    </div>
                </div>
            </div>
            <nav class="nav justify-content-center ">
                <a class="nav-link add" data-bs-toggle="modal" data-bs-target="#modalId"> + Adicionar doces ao site </a>
            </nav>
        </div>

        <!-- Total de registros -->
        <p>Todos(<?php echo $total; ?>)</p>

        <!-- Filtro -->
        <section id="groups" <?php if (isset($_GET['filtro'])) echo "disabled"; ?>>
            <div class="row ">
                <div class="col-12 mt-3 mb-1">

                </div>
            </div>
        </section>
        <!-- Fim filtro -->

        <!-- Vitrine de produtos cadastrados -->
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel active_course owl-loaded owl-drag">
                        <?php while ($linha = mysqli_fetch_assoc($dados_anuncios)) { ?>
                            <div class="owl-stage-outer">
                                <div class="owl-item active" style="width: 300px; padding: 10px;">
                                    <div class="single_course">
                                        <div class="course_head">
                                            <a href="#productView" data-bs-toggle="modal"> <img class="img-fluid" src="../<?php echo $avatar = $linha['img_anuncios']; ?>" alt="" /></a>
                                        </div>
                                        <div class="course_content">
                                            <span class="price">R$ <?php echo $valor = $linha['valor_anuncios']; ?></span>
                                            <span class="tag mb-4 d-inline-block">O cento</span>
                                            <h4 class="mb-3">
                                                <a href="#productView" data-bs-toggle="modal"><?php echo $nome = $linha['nome_anuncios']; ?></a>
                                            </h4>
                                            <p>
                                                Docinho tradicional de chocolate com granulado.
                                                <br>
                                                Pedido mínimo 50 unidades.
                                            </p>
                                            <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                <div class="mt-lg-0 mt-3">
                                                </div>
                                            </div>
                                            <div class="btns-cardapio">
                                                <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Visualizar</a>
                                            </div>
                                            <div class="btn_fav">
                                                <a class="nav-link d-sm-flex align-items-sm-center add-cart cart36" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                                <?php
                                include '../includes/cardsDoce.php';
                                ?>
                            </div>







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