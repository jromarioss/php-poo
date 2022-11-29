<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 06 Herança</title>
</head>
<body>
  <pre>
  <?php
  require "./Conn.php";
  require "./ListUsers.php";
  
  $listUsers = new ListUsers();
  $result_users = $listUsers->list();
  
  foreach($result_users as $row_user) {
    //var_dump($row_user);
    extract($row_user); // para usar a chame

    echo "ID: $id<br/>";
    echo "ID: $name<br/>";
    echo "ID: $email<br/>";
    echo "<hr><br/>";
  }
  ?>
  </pre>
</body>
</html>