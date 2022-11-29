<?php

class ClientePessoaJuridica extends Cliente // para usar o atributos da classe cliente
{
  public string $nomeFantasia;
  public int $cnpj;

  public function verInformacaoEmpresa(): string
  {
    $dados = "Endereço da pessoa juridica<br/>";
    $dados .= "Endereço: {$this->logradouro}<br/>"; // concatena com a outra frase de cima
    $dados .= "Bairo: {$this->bairro}<br/>";
    $dados .= "Nome Fantasia: {$this->nomeFantasia}<br/>";
    $dados .= "CNPJ: {$this->cnpj}<br/>";

    return $dados;
  }
}