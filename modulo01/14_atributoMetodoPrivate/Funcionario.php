<?php

class Funcionario {

  public string $nome;
  public float $salario;
  private string $salarioConvertido; // só pode ser instânciado dentro da classe Funcionario

  public function verSalario(): string {
    return "O funcionário {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)}";
  }

  private function converterSalario($salario): string {
    // 2 casa decimais, separar decimal por virgulha, separa o milhar por ponto
    $this->salarioConvertido = number_format($salario, '2', ',', '.');
    return $this->salarioConvertido;
  }
}