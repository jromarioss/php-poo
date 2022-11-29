<?php

// final class Cheque = classe final não pode ser herdada
abstract class Cheque
{
  public float $valor;
  public string $tipo;

  public function __construct(float $valor, string $tipo)
  {
    $this->valor = $valor;
    $this->tipo = $tipo;
  }

  //  final function converterReal(float $valor): string = Método final mão pode ser reescrito na classe filha
  public function converterReal(float $valor): string
  {
    // converter 1=passa o valor, 2=duas casa decimal, 3=por vigula, 4=decimal por .
    return number_format($valor, '2', ',', '.');
  }
}