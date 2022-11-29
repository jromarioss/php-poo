<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aula </title>
</head>
<body>
  <?php
    require 'Cliente.php';
    require 'ClientePessoaFisica.php';
    require 'ClientePessoaJuridica.php';

    $cliente = new Cliente();
    $cliente->logradouro = "Antônio Bertagna";
    $cliente->bairro = "Di Napoli";
    $msg = $cliente->verEndereco();

    echo $msg;
    echo "<hr/>";
    
    $clientePf = new ClientePessoaFisica();
    $clientePf->logradouro = "Antônio Bertagna - B";
    $clientePf->bairro = "Di Napoli";
    $clientePf->nome = "José Romário";
    $clientePf->cpf = 123456789;
    
    $msgPf = $clientePf->verInformacaoUsuario();
    echo $msgPf;
    echo "<hr/>";

    $clientePJ = new ClientePessoaJuridica();
    $clientePJ->logradouro = "Antônio Bertagna - C";
    $clientePJ->bairro = "Di Napoli";
    $clientePJ->nomeFantasia = "Maria Santos";
    $clientePJ->cnpj = 987654321;
    
    $msgPJ = $clientePJ->verInformacaoEmpresa();
    echo $msgPJ;
    echo "<hr/>";
  ?>
</body>
</html>