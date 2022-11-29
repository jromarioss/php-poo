<?php

/**
 * A classe funcionario calcula o salário do colaborador
 * 
 * @author José <jromario2014@gmail.com>
 */

class Funcionario {

  /** @var string $nome Recebe o nome do colaborador */
  public string $nome;
  /** @var float $salario Recebe o salario do colaborador */
  public float $salario;
  /** @var string $salarioConvertido Recebe o salario convertido do colaborador */
  private string $salarioConvertido; // só pode ser instânciado dentro da classe Funcionario
  /** @var float $bonus Recebe o bonus do colaborador */
  protected float $bonus = 2500;
  
  /**
   * Criar a frase com o nome e o salario do colaborador 
   * @return string Retorna a frase com o nome e o salario do colaborador 
   */
  public function verSalario(): string {
    return "O funcionário {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)} <br/>";
  }

  /**
   * Recebe o salário e retorna convertido para real R$
   * Método privado, somende pode ser chamado na classe
   *
   * @param float $valor deve ser enviado o parametro númerico
   * @return string Retorna o valor convertido para R$
   */
  private function converterSalario(float $salario): string {
    // 2 casa decimais, separar decimal por virgulha, separa o milhar por ponto
    $this->salarioConvertido = number_format($salario, '2', ',', '.');
    return $this->salarioConvertido;
  }

  /**
   * Método protegido, somente pode ser chamado na classe ou na classe filha
   *
   * @return string Retorna o bônus
   */
  protected function bonusCalculado(): string {
    return $this->converterSalario($this->bonus);
  }
}