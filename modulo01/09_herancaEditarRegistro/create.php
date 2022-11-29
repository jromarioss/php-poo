<?php
  session_start();
  ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="divTop">
    <a href="index.php" class="button">Listar</a><br/>
    <a href="create.php" class="button">Cadastrar</a><br/>
  </div>

  <h1>Cadastrar Usuários</h1>

  <?php
  require "./Conn.php";
  require "./User.php";
  
  $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  
  if (!empty($formData['SendAddUser'])) { // se for diferente de vazio
    //var_dump($formData);
    $createUser = new User();
    $createUser->formData = $formData;
    $value = $createUser->create();

    if ($value) {
      $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
      header("Location: index.php");
    } else {
      echo "<p style='color: red;'>Usuário não cadastrado com sucesso!</p>";
    }
  }
  ?>

  <form name="CreateUser" method="POST" action="">
    <label>Nome:</label>
    <input type="text" name="name" placeholder="Nome completo" required /><br/><br/>

    <label>Email:</label>
    <input type="email" name="email" placeholder="E-mail" required /><br/><br/>

    <input type="submit" value="Cadastrar" name="SendAddUser" />
  </form>
</body>
</html>