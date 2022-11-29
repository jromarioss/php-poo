<?php

session_start();
ob_start();

// receber o id da url
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);
// Verificar se o id possui valor
if (!empty($id)) {
  // incluir os arquivo com db
  require './Conn.php';
  require './User.php';

  // Instânciar a classe e criar o objeto
  $deleteUser = new User();

  // enviar o id para o atributo da classe User
  $deleteUser->id = $id;

  // instânciar o método apagar
  $value = $deleteUser->delete();

  if ($value) {
    $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado!</p><br/>";
    header("Location: index.php");
  } else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não apagado!</p><br/>";
    header("Location: index.php");
  }
  
} else {
  $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p><br/>";
  header("Location: index.php");
}