<?php

class Conn
{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $dbname = "celke";
  public $port = 3306;
  public $connect = null;

  public function conectar() {
    try {
      //conexão com a pota
      //$this->connect = new PDO(
      //  "mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->password
      //);

      //conexão sem a pota
      $this->connect = new PDO(
        "mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password
      );

      //echo 'Conexão realizada com sucesso!';
      return $this->connect;

    } catch (Exception $err) {
      echo "Error: Conexão não realizada com sucesso! ERROR: ".$err;
      return false;
    }
  }
}