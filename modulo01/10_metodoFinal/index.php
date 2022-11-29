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
    require "Cheque.php";
    require "ChequeComun.php";
    require "ChequeEspecial.php";

    //a classe abstrata não pode ser instânciada
    //$cheque = new Cheque(200.37, "comum");
    //$msg = $cheque->verValor();
    //echo $msg;

    $chequeComum = new ChequeComun(300.50, "comum");
    $msgChequeComum = $chequeComum->calcularJuros();
    echo $msgChequeComum;

    $chequeEspecial = new ChequeEspecial(300.50, "especial");
    $msgChequeEspecial = $chequeEspecial->calcularJurosEspecial();
    echo $msgChequeEspecial;

  ?>
</body>
</html>