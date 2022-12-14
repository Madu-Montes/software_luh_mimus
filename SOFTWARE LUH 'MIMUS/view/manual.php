
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
    <title>Manual | Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/manual.css">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/iconly/bold.css">
    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
</head>

<body>
    
    <!-- Header -->
    <?php
    include '../includes/menuLateral.php';
    ?>

<script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/main.js"></script>



        <div id="main">
            <div class="container-fluid">
                <h1>Bem vindo(a) <?php echo $_SESSION['nome'];?> ao Manual do Software</h1>
                <div class="conteudo">
                    <h2>ÍNDICE</h2>
                    <p>Clique nos links abaixo para ir para uma seção específica desta Política.</p>
                    <div class="indice">
                        <ul>
                            <a href="#1">
                                <li>Dashboard, entenda-o</li>
                            </a>
                            <a href="#2">
                                <li>Como funciona o calendário?</li>
                            </a>
                            <a href="#3">
                                <li>Clientes</li>
                            </a>
                            <a href="#4">
                                <li>Como alterar seus anúncios?</li>
                            </a>

                            <a href="#5">
                                <li>Entenda a parte de encomendas</li>
                            </a>

                            <a href="#7">
                                <li>Como alterar informações financeiras?</li>
                            </a>
                        </ul>
                    </div>
                    <h3 id="1">1. Dashboard, entenda-o</h3>
                    <p>Na parte superior da tela você terá 3 cards informando seus clientes cadastrados, seu lucro e o
                        número de encomendas realizadas. Veja abaixo:</p>
                    <img src="../images/manual1.png" alt="">
                    <p>O gráfico de encomendas permite uma visualização anual de suas encomendas, mostrando de forma
                        precisa o número vendido a cada mês.</p>
                    <img src="../images/manual2.png" alt="">
                    <p>Os cards de novas encomendas mostram de maneira rápida a novas entregas que você tem.</p>
                    <img src="../images/manual3.png" alt="">

                    <h3 id="2">2. Como funciona o calendário?</h3>
                    <p>No calendário você terá uma visão mensal de sua encomendas, com data, hora e informações importantes do cliente.</p>
                    <img src="../images/manual8.jfif" alt="">
                    <p>Nele você também pode selecionar datas nas quais você não trabalhará, ou seja, estará de indispónivel naquele dia em determinado horário.</p>

                    <h3 id="3">3. Clientes</h3>
                    <p>Os clientes cadastrados no site terão suas informações salvas no banco de dados, e por essa tela você pode visualizar informações importantes destes clientes, além de poder exclui-los se desejar..
                    </p>
                    <img src="../images/manual9.jfif" alt="">
                    <br>

                    <h3 id="4">4. Como alterar seus anúncios</h3>
                    <p>na tela de anúncios você pode criar, editar ou excluir os anúncios que apareceram em seu site.
                    </p>

                    <h3 id="5">5. Encomendas, entenda</h3>
                    <p>As encomendas realizadas por seus clientes no site, apareceram de forma detalhada, você poderá
                        visualizar todas ou apenas as finalizadas.</p>
                    <img src="../images/manual4.png" alt="">
                    <p>Para finalizar sua entrega basta clicar no check no canto direito da tela, e automaticamente ela
                        ira para a tela de "finalizada".</p>
                    <img src="../images/manual5.png" alt="">

                    <h3 id="7">6. Como alterar informações financeiras?</h3>
                    <p>Nesta tela você tem uma visão geral de suas finanças, podendo gerar até mesmo um relatório.</p>
                    <p>O único campo editável é o de despesas fixas, para adicionar mais um despesa, basta clicar no
                        botão de mais (+) e preecher os campos pedidos. Já para editar ou excluir, basta clicar nos
                        respectivos botões e confirmar o ato</p>
                    <div class="desp-img">
                        <img src="../images/manual7.png" alt="">
                    </div>
                </div>
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

    <script src="../vendors/apexcharts/apexcharts.js"></script>
    <script src="../js/pages/dashboard.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>
</div>
</body>

</html>