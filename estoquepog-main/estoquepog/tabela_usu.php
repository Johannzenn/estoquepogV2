<?php
    require("protected.php");
    require("conn.php");

    $tabela_usu = $pdo->prepare("SELECT id_usu, name_usu, senha_usu, email_usu 
    FROM tb_usuariopog;");
    $tabela_usu->execute();
    $rowTabela = $tabela_usu->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de Usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Tabela de Usuário</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">NOME USUÁRIO</th>
            <th scope="col">SENHA USUÁRIO</th>
            <th scope="col">EMAIL USUÁRIO</th>
            <th scope="col">EDITAR USUÁRIO</th>
            <th scope="col">EXCLUIR USUÁRIO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id_usu']."</th>";
                echo "<td>".$linha['name_usu']."</td>";
                echo "<td>".$linha['senha_usu']."</td>";
                echo "<td>".$linha['email_usu']."</td>";
                echo '<td><a href=edit_usu.php?tb_usuariopog='.$linha['id_usu'].' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=CRUD\del_usu.php?tb_usuariopog='.$linha['id_usu'].' class="btn btn-danger">Excluir</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <a href="index_usu.php" class="btn btn-primary">CADASTRAR USUÁRIO</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>