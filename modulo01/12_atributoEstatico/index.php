<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 12 atributo estatícos</title>
</head>
<body>
  <?php
    require "Disciplina.php";

    //Acessa o atributo sem criar o objeto, consegue instância sem objeto
    echo "Média: ".Disciplina::$media."<br/>";

    $disciplina = new Disciplina("Maria", 7, 7);
    echo $disciplina->situacao();

    //Acesar o método sem criar o objeto
    echo "Situação: ".Disciplina::situacaoAluno(7);
    ?>
</body>
</html>