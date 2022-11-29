<?php

class ListUsers extends Conn {
  public object $conn;

  public function list(): array
  {
    $this->conn = $this->conectar();
    $query_users = "SELECT id, name, email FROM users ORDER BY id ASC LIMIT 40";
    $result_users = $this->conn->prepare($query_users);
    $result_users->execute();
    $retorno = $result_users->fetchAll();
    //var_dump($retorno);

    return $retorno;
  }
}