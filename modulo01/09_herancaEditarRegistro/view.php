<?php
  session_start();

  ob_start(); // limpar o boofer de saída

  //Receber o id do usuário
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="divTop">
    <a href="index.php" class="button">Listar</a><br/>
    <a href="create.php" class="button">Cadastrar</a><br/>
  </div>
  
  <h1>Detalhes do Usuário</h1>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']); // destrua oque tiver dentro
  }

  if (!empty($id)) { // se for diferente de vazio
    // incluir os arquivos
    require "./Conn.php";
    require "./User.php";
    // Instancia a classe e criar o objeto
    $viewUser = new User();
    $viewUser->id = $id; // seta o id para o atributo
    $valueUser = $viewUser->view();
    extract($valueUser);
    echo "ID do usuário: $id<br/>";
    echo "Nome do usuário: $name<br/>";
    echo "E-mail do usuário: $email<br/>";
    echo "Cadastrado do usuário: ".date('d/m/Y H:i:s', strtotime($created))."<br/>"; // converte para data do BR

    echo "Editado: ";
    if (!empty($modified)) { // só converte qnd modified possui valor
      echo date('d/m/Y H:i:s', strtotime($modified));
    }
    echo "<br/>";

  } else {
    $_SESSION['msg'] = "<p style='color: red;'>Error: Usuário não encontrado!</p>";
    header("Location: index.php");
  }
  ?>
</body>
</html>