<?php
    include("conn.php");
    $name_usu = $_POST['name_usu'];
    $senha_usu = $_POST['senha_usu'];

    $tb_usuariopog = $pdo->prepare('SELECT * FROM tb_usuariopog where name_usu=:name_usu 
    AND senha_usu=:senha_usu');
    $tb_usuariopog->execute(array(':name_usu'=>$name_usu,':senha_usu'=>$senha_usu));

    $rowTabela = $tb_usuariopog->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Usuário e/ou senha invalidos!!!');
        </script>";
    }else{
       
    $sessao = $rowTabela[0];

    if(!isset($_SESSION)) {
    session_start();
    }
    $_SESSION['name_usu'] = $sessao['name_usu'];
    $_SESSION['senha_usu'] = $sessao['senha_usu'];

    header("Location: tabela.php");
    }

?>
