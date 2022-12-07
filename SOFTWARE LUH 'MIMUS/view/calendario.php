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
    
        
    <?php
    include '../includes/MenuLateral.php';
    ?>

    <!-----Header------->
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