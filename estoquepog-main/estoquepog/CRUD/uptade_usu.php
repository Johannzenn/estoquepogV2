<?php
    require('../conn.php');

    $id_usu = $_POST['id_usu'];
    $name_usu = $_POST['name_usu'];
    $senha_usu = $_POST['senha_usu'];
    $email_usu = $_POST['email_usu'];

    if(empty($name_usu) || empty($senha_usu) || empty($email_usu)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_usu = $pdo->prepare("UPDATE tb_usuariopog set 
        name_usu = :name_usu, 
        senha_usu = :senha_usu, 
        email_usu = :email_usu, WHERE 
        id_usu = :id_usu;");
    

    $update_usu->execute(array(
        ':id_usu' => $id_usu,
        ':name_usu'=> $name_usu,
        ':senha_usu'=> $senha_usu,
        ':email_usu'=> $email_usu 
    ));

    echo 'sucesso';
    }

?>