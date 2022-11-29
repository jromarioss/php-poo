<?php

abstract class Conn {
  public string $db = "mysql";
  public string $host = "localhost";
  public string $user = "root";
  public string $pass = "";
  public string $dbname = "celke";
  public int $port = 3306;
  public object $connect;

  public function conectar()
  {
    try {
      // conecxão com a porta
      //$this->connect = new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname, $this->user, $this->pass);

      // conecxão sem a porta
      $this->connect = new PDO($this->db.':host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);

      echo "Conexão com banco de dados realizado com sucesso<br/>";
      return $this->connect;

    } catch(Exception $err) {
      die("Error: por favor tente novamente mais tarde.");
      //echo "Error: Conexão com banco de dados não realizada<br/>".$err->getMessage();
    }
  }
}