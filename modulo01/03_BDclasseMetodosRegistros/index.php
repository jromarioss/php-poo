<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 03</title>
</head>
<body>
  <?php
    //incluir o arquivo
    require './Usuarios.php';

    //instanciando a classe
    //criado o objeto listarusuario
    $listarUsuarios = new Usuarios();
    //instanciar o metodo listar
    $result_usuarios = $listarUsuarios->listar();

    foreach($result_usuarios as $row_usuario) {
      extract($row_usuario); // para poder imprimir com od id
      echo "ID: $id <br/>";
      echo "NOME: do usuário $nome <br/>";
      echo "E-mail: do usuário $email <br/>";
      echo "<hr/>";
    }
  ?>
</body>
</html>