<?php

class Users extends Conn {
  public object $conn;
  public array $formData;

  public function list(): array
  {
    $this->conn = $this->connectDb();
    $query_users = "SELECT id, name, email FROM users ORDER BY id ASC LIMIT 40";
    $result_users = $this->conn->prepare($query_users);
    $result_users->execute();
    $retorno = $result_users->fetchAll();
    //var_dump($retorno);

    return $retorno;
  }

  public function create(): bool
  {
    //var_dump($this->formData);
    $this->conn = $this->connectDb();
    $query_user = "INSERT INTO users (name, email, created) VALUES (:name, :email, NOW())"; // NOW() pega a data atual
    $add_user = $this->conn->prepare($query_user);
    $add_user->bindParam(':name', $this->formData['name']); // para substituir o nome e email
    $add_user->bindParam(':email', $this->formData['email']);
    $add_user->execute();

    if ($add_user->rowCount()) {
      return true;
    } else {
      return false;
    }
  }
}