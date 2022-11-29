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
  <title>Edit</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="divTop">
    <a href="index.php" class="button">Listar</a><br/>
    <a href="create.php" class="button">Cadastrar</a><br/>
  </div>
  
  <h1>Editar do Usuário</h1>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']); // destrua oque tiver dentro
  }

  // incluir os arquivos
  require "./Conn.php";
  require "./User.php";

  // receber os dados do formulário
  $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  
  // verificar se o user clicou no botão
  if (!empty($formData['SendEditUser'])) {
    //var_dump($formData);
    $editUser = new User();
    $editUser->formData = $formData;
    $value = $editUser->edit();
    if ($value) {
      $_SESSION['msg'] = "<p style='color: green;'>Usuário editado com Sucesso!</p>";
      header("Location: index.php");
    } else {
      $_SESSION['msg'] = "<p style='color: red;'>Usuário não editado com Sucesso!</p>";
    }
  }

  if (!empty($id)) { // se for diferente de vazio
    // Instancia a classe e criar o objeto
    $viewUser = new User();
    $viewUser->id = $id; // seta o id para o atributo
    $valueUser = $viewUser->view();
    //var_dump($valueUser);
    extract($valueUser);

    ?>
    <form name="EditUser" method="POST" action="">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />

      <label>Nome:</label>
      <input type="text" name="name" placeholder="Nome completo" value="<?php echo $name; ?>" required /><br/><br/>

      <label>Email:</label>
      <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required /><br/><br/>

      <input type="submit" value="Editar" name="SendEditUser" />
    </form>
    <?php

  } else {
    $_SESSION['msg'] = "<p style='color: red;'>Error: Usuário não encontrado!</p>";
    header("Location: index.php");
  }
  ?>
</body>
</html>