<?php
    require('../conn.php');

   if( isset($_GET['usuario'])){
        $usuario = $_GET['usuario'];
   }else{
        header("Location: ../index_usu.php");
   }

   $del_usu = $pdo->prepare('DELETE FROM tb_usuariopog WHERE id_usu=:usuario');
   $del_usu->execute(array(':usuario'=>$usuario));  
?>