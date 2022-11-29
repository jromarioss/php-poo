<?php

class ClientePessoaFisica extends Cliente // para usar o atributos da classe cliente
{
  public string $nome;
  public int $cpf;

  public function verInformacaoUsuario(): string
  {
    $dados = "Endereço da pessoa física<br/>";
    $dados .= "Endereço: {$this->logradouro}<br/>"; // concatena com a outra frase de cima
    $dados .= "Bairo: {$this->bairro}<br/>";
    $dados .= "Nome: {$this->nome}<br/>";
    $dados .= "CPF: {$this->cpf}<br/>";

    return $dados;
  }
}