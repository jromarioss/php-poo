<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 06 Herança</title>
</head>
<body>
  <a href="index.php">Listar</a><br/>
  <a href="create.php">Cadastrar</a><br/>
  
  <h1>Listar Usuários</h1>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']); // destrua oque tiver dentro
  }

  require "./Conn.php";
  require "./Users.php";
  
  $listUsers = new Users();
  $result_users = $listUsers->list();
  
  foreach($result_users as $row_user) {
    //var_dump($row_user);
    extract($row_user); // para usar a chame

    echo "<pre>";
    echo "ID: $id<br/>";
    echo "ID: $name<br/>";
    echo "ID: $email<br/>";
    echo "<hr>";
    echo "</pre>";
  }
  ?>
</body>
</html>;