<?php
     include_once"conn_banco.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <title>Categorias Cadastradas</title>
</head>
<body>
    <?php
        
        if(isset($_GET['btnSubmitCategorias'])){
            $nomeCategoria = $_GET['nome'];
            $desc = $_GET['desc'];
        
            $testar = $sql->query("SELECT * FROM categorias WHERE nome_categorias = '$nomeCategoria'");
            $check = mysqli_num_rows($testar);

    
            if ($check == 1){
                echo "Categoria já cadastrado";
            }else{
            
                $sql->query("INSERT INTO categorias(id_categorias, nome_categorias, desc_categorias) VALUES
                (NULL, '$nomeCategoria','$desc')");  
            }
        }
    ?>

    <div>
        <form method="get" action="categorias.php" name="fmCategorias">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doces" name="nome">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
            </div>
        <button type="submit" class="btn btn-primary" name="btnSubmitCategorias">Cadastrar</button>
        </form>
    </div>

    <?php 
        $dados_categorias = $sql->query("SELECT * FROM categorias");
        $totalCategorias = mysqli_num_rows($dados_categorias);

        while ($linha = mysqli_fetch_assoc($dados_categorias)){
            $id = $linha['id_categorias'];
            $nomeCategoria = $linha['nome_categorias'];
            $desc = $linha['desc_categorias'];
        }

        echo $id;
        echo $nomeCategoria;
        echo $desc;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>