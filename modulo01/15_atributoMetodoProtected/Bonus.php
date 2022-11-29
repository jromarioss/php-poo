<?php

class Bonus extends Funcionario {
  public function verBonus(): string {
    return "O funcionaário tem o bônus de R$".$this->bonusCalculado()."<br/>";
  }
}