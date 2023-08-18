<?php
include_once 'conexao.php';
//Chamar o arquivo de conexão
//query = consulta
$resultado = $pdo->query("SELECT * FROM cadastrar");
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <table class="table table-bordered" width='90%' >
            <tr class="table-danger">
                <td scope="col">Nome</td>
                <td scope="col">CPF</td>
                <td scope="col">Email</td>
                <td scope="col">Senha</td>
                <td scope="col">Configuração</td>
            </tr>
</div>

<?php
/*O while é responsavel por andar as linhas 
da tabela
fetch = função do PHP para buscar os dados
junto com o select*/
while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row['nomeUsuario']."</td>";
    echo "<td>".$row['cpfUsuario']."</td>";
    echo "<td>".$row['emailUsuario']."</td>";
    echo "<td>".$row['senhaUsuario']."</td>";
    
    echo "<td> <a href=\"updateUsuario.php?id=$row[idUsuario]\"> Editar </a> | 
    <a href=\"deleteUsuario.php?id=$row[idUsuario]\"
    
    onClick=\"return confirm('Você deseja apagar os dados?')\"> Excluir</a></td>"; 
    
}
?> 
</table> 
</body> 
</html>         