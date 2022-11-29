<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula 05 Classe Abstrata </title>
</head>
<body>
  <?php
    require "ICurso.php";
    require "CursoPosGraduacao.php";
    require "CursoGraduacao.php";

    $cursoPosGraduacao = new CursoPosGraduacao();
    echo $cursoPosGraduacao->disciplina("Desenvolviment Web");
    echo $cursoPosGraduacao->professor("Celke");

    $cursoGraduacao = new CursoGraduacao();
    echo $cursoPosGraduacao->disciplina("Desenvolviment Mobile");
    echo $cursoPosGraduacao->professor("Guanabara");
  ?>
</body>
</html>