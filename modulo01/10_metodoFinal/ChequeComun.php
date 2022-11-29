<?php

class ChequeComun extends Cheque
{
  public function calcularJuros(): string
  {
    $valorComJuros = $this->valor + (0.20 * $this->valor);
    //$valorConvReal = parent::converterReal($this->valor);
    $valorConvReal = $this->converterReal($valorComJuros);
    
    return "Valor do cheque {$this->tipo} sem juros R$ {$this->converterReal($this->valor)} e com juros R$ {$valorConvReal} reais<br/>";
  }
}