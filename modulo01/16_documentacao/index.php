<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 13 atributos e métodos público</title>
</head>
<body>
  <?php

    /* 
      link para documentação
      https://www.php-fig.org/psr/
      https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
      https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md
    */
    require "Funcionario.php";
    require "Bonus.php";

    $funcionario = new Funcionario();
    // atribulo publico pode ser acessado fora da classe
    $funcionario->nome = "José Romário";
    $funcionario->salario = 2050.45;
    echo $funcionario->verSalario();
    // privado não pode acessar: $funcionario->salarioConvertido = "72,15";
    // privado não pode acessar: $funcionario->converterSalario(2000);

    // Atributo protegido somente pode ser acessado pela classe e pela classe filha
    // $funcionario->bonus;

    // método protegido somente pode ser acessado pela classe e pela classe filha
    //$funcionario->bonusCalculado();

    $funcBonus =new Bonus();
    echo $funcBonus->verBonus();
  ?>
</body>
</html>