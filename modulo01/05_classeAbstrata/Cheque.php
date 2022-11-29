<?php

// uma classe abstract ñ pode ser instânciada
abstract class Cheque
{
  public float $valor;
  public string $tipo;

  public function __construct(float $valor, string $tipo)
  {
    $this->valor = $valor;
    $this->tipo = $tipo;
  }

  // PHP 8
  // public function __construct(public float $valor, public string $tipo) {} 

  /* public function verValor(): string
  {
    return "Valor do cheque {$this->tipo} é R$ {$this->valor} reais.<br/>";
  } */

  public function converterReal(float $valor): string
  {
    // converter 1=passa o valor, 2=duas casa decimal, 3=por vigula, 4=decimal por .
    return number_format($valor, '2', ',', '.');
  }
}