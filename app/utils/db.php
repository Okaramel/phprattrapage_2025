<?php
namespace App\utils;

use PDO;

abstract class Bdd{
  protected $co = null;
 
  protected function __construct() {
    if($this->co == null){
      $this->connect();
    }
  }
 
  private function loadEnv(): void {
    $envFile = __DIR__ . '/../../.env';
    if (!file_exists($envFile)) {
        die("Le fichier .env est manquant");
    }

    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$key, $value] = explode('=', $line, 2);
        $_ENV[trim($key)] = trim(trim($value), '"');
    }
}

  private function connect():void
{
  $this->loadEnv();

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