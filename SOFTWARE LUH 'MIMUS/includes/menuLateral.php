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

    <section id="menuLateral">
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
                            <li><a class="dropdown-item" href="../view/bolo.php">Bolos</a></li>
                            <li><a class="dropdown-item" href="../view/anuncios2.php">Doces</a></li>
                            <li><a class="dropdown-item" href="../view/bolo.php">Salgados</a></li>
                            <li><a class="dropdown-item" href="../view/personalizados.php">Personalizados</a></li>
                            <li><a class="dropdown-item" href="../view/kitfesta.php">Kit festa</a></li>
                            <!--Tem uma tela kitfesta.html os kits variam todo mê será que dá para deixar uma aba para ela fazer isso?-->
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
</section>
