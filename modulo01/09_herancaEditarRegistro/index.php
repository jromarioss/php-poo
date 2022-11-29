<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DB</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="divTop">
    <a href="index.php" class="button">Listar</a><br/>
    <a href="create.php" class="button">Cadastrar</a><br/>
  </div>
  
  <h1>Listar Usuários</h1>

  <div class="lists">
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']); // destrua oque tiver dentro
  }

  require "./Conn.php";
  require "./User.php";
  
  $listUsers = new User();
  $result_users = $listUsers->list();
  
  foreach($result_users as $row_user) {
    //var_dump($row_user);
    extract($row_user); // para usar a chame

    echo "<div class='list'>";
    echo "ID: $id<br/>";
    echo "ID: $name<br/>";
    echo "ID: $email<br/>";
    echo "<div class='divButton'>";
    echo "<a class='buttonBottom' href='view.php?id=$id'>Visualizar<a/><br/>";
    echo "<a class='buttonBottom' href='edit.php?id=$id'>Editar<a/><br/>";
    echo "<a class='buttonBottom' href='delete.php?id=$id'>Apagar<a/><br/>";
    echo "</div>";
    echo "</div>";
  }
  ?>
  </div>
</body>
</html>