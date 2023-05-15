<?php
    require('../conn.php');

    $name_prod = $_POST['name_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $desc_prod = $_POST['desc_prod'];
    $cat_prod = $_POST['cat_prod'];
   
    if(empty($name_prod) || empty($qtd_prod) || empty($desc_prod) || empty($cat_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_prod = $pdo->prepare("INSERT INTO tb_estoquepog(name_prod, qtd_prod, desc_prod, cat_prod) 
        VALUES(:name_prod, :qtd_prod, :desc_prod, :cat_prod)");
        $cad_prod->execute(array(
            ':name_prod'=> $name_prod,
            ':qtd_prod'=> $qtd_prod,
            ':desc_prod'=> $desc_prod,
            ':cat_prod'=> $cat_prod  
        ));

        echo "<script>
        alert('Produto Cadastrado com sucesso!');
        </script>";
    }
?>