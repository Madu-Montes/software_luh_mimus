<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque | Luh Mimu's</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/estoque.css">

    <link rel="stylesheet" href="../vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
</head>

<body>
    <!-- Menu Lateral -->
    <?php
    include '../includes/MenuLateral.php';
    ?>

    <!-----Header------->
    <?php
    include '../includes/header.php';
    ?>

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
                        <h3>Estoque</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Todos (x)
                        <a class="btn" data-bs-toggle="modal" data-bs-target="#modalId1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </a>
                    </div>

                    <div class="modal fade" id="modalId1" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Adicionar ingrediente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nome</label>
                                            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="ex.:chocolate">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Unidade</label>
                                            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="ex.: gramas">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Quantidade</label>
                                            <input type="number" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="ex.: 15">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Preço/unidade</label>
                                            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="ex.: $20,00">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Observação</label>
                                            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="ex.: 50%">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-dark">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Excluir</th>
                                    <th>Nome</th>
                                    <th>Unidade</th>
                                    <th>Quantidade</th>
                                    <th>Preço/unidade</th>
                                    <th>Observação</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>

                                    <!-- Button trigger modal -->
                                    <td><button type="button" class="btn btn-lg icon" data-bs-toggle="modal" data-bs-target="#modalId"><i class="bi bi-trash"></i>
                                        </button></td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Excluir?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        Tem certeza que deseja excluir esse ingrediente?
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-dark">Excluir</button>
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

                                    <td>Lt. condensado</td>
                                    <td>gramas</td>
                                    <td>20
                                        <!-- Botão modal de editar quantidade -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modaledit">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>

                                        <!-- Modal com formulario-->
                                        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Editar a
                                                            quantidade do ingrediente</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Quantidade</label>
                                                                <input type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Salvar</button>
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
                                    </td>
                                    <!--Acaba aqui o botão de editar qtd-->
                                    <td>5,99</td>
                                    <td>Integral</td>
                                </tr>
                    </div>
                </div>
                </table>
            </section>
        </div>
        
        <!-- Footer -->
        <?php
        include '../includes/footer.php';
        ?>

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
    <!-----footer------->


</body>

</html>