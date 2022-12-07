<?php

if(!isset($_SESSION)){
    session_start();
}



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/calendario.css">
    <link rel="stylesheet" href="../css/dashboard.css">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/iconly/bold.css">
    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <style>iframe{width: 100%; height: 850px; background-color: transparent;}</style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dashboard.php"><img src="../images/logo.jfif" alt="Logo" srcset=""></a>
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
                        <li class="sidebar-item active ">
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
                            <a href="../php/clientes.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Clientes</span>
                            </a>
                        </li>

                        <!--Anúncios -->
                        <li class="sidebar-item  ">
                            <a href="./anuncios.html" class='sidebar-link'>
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
                <div class="btn-group mb-1">
                    <div class="btn-group mb-1" id="meu">
                        <div class="dropdown dropdown-color-icon user">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButtonEmoji"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:40">
                                <span Class="me-50"><img src="../images/user.png" alt="" width="32" height="32"
                                        class="rounded-circle me-2"></span><a" style="margin-top:20px;" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp> <?php echo $_SESSION['nome'];?></a>
                            </button>
                            <br>
                            <br>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                                <a class="dropdown-item" href="./perfil.html"><span class="dropdown-item-emoji"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg></span>
                                    ‎ ‎ ‎ ‎ Perfil</a>
                                <a class="dropdown-item" href="./manual.html"><span class="dropdown-item-emoji"><svg
                                            style="width: 21px;" xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
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

    </div>

    <!---Fim do header do topo-->
    <br>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="../calendario/calendario.php"></iframe>

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

    <script src="../vendors/apexcharts/apexcharts.js"></script>
    <script src="../js/pages/dashboard.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>