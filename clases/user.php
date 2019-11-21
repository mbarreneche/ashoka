<?php

class user {

  protected $id;
  protected $email;
  protected $password;
 
  function __construct(Array $datos){

    if(isset($datos["id"])){
      $this->id = $datos["id"];
      $this->password = $datos["password"];
    } else {
      $this->id = NULL;
      $this->password = password_hash($datos["pwd"], PASSWORD_DEFAULT);
    }
    $this->email = $datos["email"];
  }

  public function getId(){
    return $this->id;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }

  public function setId($id){
    $this->id=$id;
    return $this;
  }
  public function setEmail($email){
    $this->email=$email;
    return $this;
  }
  public function setPassword($password){
    $this->password=$password;
    return $this;
  }
}
