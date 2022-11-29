<?php

class Disciplina {

  public string $aluno;
  public float $notaTrabalho;
  public float $notaProva;
  public static $media = 0; //consegue acessar o atributo sem criar o objeto

  function __construct(string $aluno, float $notaTrabalho, float $notaProva) {
    $this->aluno = $aluno;
    $this->notaTrabalho = $notaTrabalho;
    $this->notaProva = $notaProva;
    // para utilizar o atributo de fora, que não está no parâmetro dos métodos
    self::$media = ($this->notaProva + $this->notaTrabalho) / 2;
  }

  public function situacao(): string {
    if (self::$media >= 7) {
      return "Aluno(a) {$this->aluno} está <strong>APROVADO</strong>, com a média ".self::$media."<hr/>";
    } else {
      return "Aluno(a) {$this->aluno} está <strong>REPROVADO</strong>, com a média ".self::$media."<hr/>";
    }
  }

  static function situacaoAluno(float $nota): string {
    if ($nota >= 7) {
      return "Aluno(a) está <strong>APROVADO</strong>, com a média ".$nota."<hr/>";
    } else {
      return "Aluno(a) está <strong>REPROVADO</strong>, com a média ".$nota."<hr/>";
    }
  }
}