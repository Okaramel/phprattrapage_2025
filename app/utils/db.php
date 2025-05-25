<?php

abstract class Bdd{
  protected $co = null;
 
  protected function __construct() {
    if($this->co == null){
      $this->connect();
    }
  }
 
  private function connect():void
{
  $host = $_ENV['db_host'];
  $dbname = $_ENV['db_name'];
  $user = $_ENV['db_user'];
  $pwd = $_ENV['db_pwd'];

  $this->co = new PDO(
    "mysql:host=$host;dbname=$dbname",
    $user,
    $pwd
  );
}

}

?>