<?php

//Chamar o arquivo de conexão.
include 'conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT); 

//array (grupo)
// Os dados são recebidos em grupos 
//São filtrados 
// INPUT_POST = envia as informações
//post= Metódo de envio oculto, os dados são enviados pela barra de url é ele quem faz com que as informações transitem



$dados =  [
  'nomeUsuario' => $post ['nomeusuario'],
  'cpfUsuario'  => $post ['cpfusuario'],
  'emailUsuario' => $post ['emailusuario'],
  'senhaUsuario' => $post ['senhausuario'],
];

  $Campos = implode (',', array_keys($dados));
  $Valores = ':' .implode (',:', array_keys ($dados));
  $Tabela = 'cadastrar';
  $Comando = "INSERT INTO {$Tabela} ({$Campos}) VALUES ({$Valores})"; 

  $sth = $pdo -> prepare($Comando);
  $sth ->execute($dados);


  echo '<script>alert("Informações cadastradas com sucesso")</script>';
  header('location: selectCadastro.php');
  ?>
