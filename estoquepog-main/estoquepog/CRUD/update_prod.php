<?php
    require('../conn.php');

    $id_prod = $_POST['id_prod'];
    $name_prod = $_POST['name_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $desc_prod = $_POST['desc_prod'];
    $cat_prod = $_POST['cat_prod'];

    if(empty($name_prod) || empty($qtd_prod) || empty($desc_prod) || empty($cat_prod) || empty($id_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_prod = $pdo->prepare("UPDATE tb_estoquepog set 
        name_prod = :name_prod, 
        qtd_prod = :qtd_prod, 
        desc_prod = :desc_prod, 
        cat_prod = :cat_prod WHERE 
        id_prod = :id_prod;");
    

    $update_prod->execute(array(
        ':id_prod' => $id_prod,
        ':name_prod'=> $name_prod,
        ':qtd_prod'=> $qtd_prod,
        ':desc_prod'=> $desc_prod,
         ':cat_prod'=> $cat_prod  
    ));

    echo 'sucesso';
    }

?>