<?php
    include'conn_banco.php';

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $massa = $_POST['massa'];
    $recheio = $_POST['recheio'];
    $uploaddir = "medias/bolo";
    $avatar = $_FILES['img_bolo']['name'];
    $separa = explode(".", $avatar);
    $separa = array_reverse($separa);
    $tipoa = $separa[0];
    $avatarf = $nome. '.' . $tipoa;
    
    $testar = $sql->query("SELECT * FROM bolo WHERE nome_bolo = '$nome'");
    $check = mysqli_num_rows($testar);

    if ($check == 1){
        echo "Anuncio já cadastrado";
    }else{
        move_uploaded_file($_FILES["img_bolo"]["tmp_name"], "../" . $uploaddir . 
        $avatarf);

        $avatarbd = $uploaddir . $avatarf;

        $sql->query("INSERT INTO bolo(id_bolo, nome_bolo, valor_bolo, desc_bolo, massa_bolo, recheio_bolo, img_bolo) VALUES
        (NULL,'$nome','$valor','$desc', '$massa', '$recheio', $avatarbd' )");

       

    }

    
