<?php

class ChequeEspecial extends Cheque
{
  public function calcularJurosEspecial(): string
  {
    $valorComJuros = $this->valor + (0.25 * $this->valor);
    $valorConvReal = parent::converterReal($valorComJuros);
    
    return "Valor do cheque {$this->tipo} sem juros R$ {$this->converterReal($this->valor)} e com juros R$ {$valorConvReal} reais<br/>";
  }
}