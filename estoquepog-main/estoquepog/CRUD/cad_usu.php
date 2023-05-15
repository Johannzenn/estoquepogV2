<?php
    require('../conn.php');

    $name_usu = $_POST['name_usu'];
    $senha_usu = $_POST['senha_usu'];
    $email_usu = $_POST['email_usu'];
   
    if(empty($name_usu) || empty($senha_usu) || empty($email_usu)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_usu = $pdo->prepare("INSERT INTO tb_usuariopog(name_usu, senha_usu, email_usu) 
        VALUES(:name_usu, :senha_usu, :email_usu)");
        $cad_usu->execute(array(
            ':name_usu'=> $name_usu,
            ':senha_usu'=> $senha_usu,
            ':email_usu'=> $email_usu
        ));

        echo "<script>
        alert('Usuário Cadastrado com sucesso!');
        </script>";
    }
?>