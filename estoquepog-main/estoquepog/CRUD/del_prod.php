<?php
    require('../conn.php');

   if( isset($_GET['produto'])){
        $produto = $_GET['produto'];
   }else{
        header("Location: ../index.php");
   }

   $del_prod = $pdo->prepare('DELETE FROM tb_estoquepog WHERE id_prod=:produto');
   $del_prod->execute(array(':produto'=>$produto));  
?>