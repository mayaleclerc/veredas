<?php 
    include 'conexao.php';
     $tabela = 'cadastrar';
     $id_tabela = 'idUsuario';

     $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
     $sth = $pdo->prepare("DELETE FROM ".$tabela." where ".$id_tabela." = :id");

     $sth->bindvalue(":id", $id);

     $sth->execute();
     header("LOCATION: selectCadastro.php");
?>