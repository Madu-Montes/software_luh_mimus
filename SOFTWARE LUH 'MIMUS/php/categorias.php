<?php
    include_once"conn_banco.php";


    $nome = $_POST['nome'];
    $desc = $_POST['desc'];


    $testar = $sql->query("SELECT * FROM categorias WHERE nome_categorias = '$nome'");
    $check = mysqli_num_rows($testar);

    if ($check == 1){
        echo "Categoria já cadastrado";
    }else{
    
        $sql->query("INSERT INTO categorias(id_categorias, nome_categorias, desc_categorias) VALUES
        (NULL, '$nome','$desc')");
    
    }
?>