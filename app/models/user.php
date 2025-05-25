<?php
namespace App\models;

require_once __DIR__ . '/../utils/db.php';

use App\utils\Bdd;
use PDO;


class User extends Bdd {
    private string $last_name;
    private string $first_name;
    private string $adress;

    public function __construct(string $last_name = '', string $first_name = '', string $adress = '') {
        parent::__construct();
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->adress = $adress;
    }

    public function save(): bool {
        $sql = "INSERT INTO users (last_name, first_name, adress) VALUES (:last_name, :first_name, :adress)";
        $stmt = $this->co->prepare($sql);
        return $stmt->execute([
            ':last_name' => $this->last_name,
            ':first_name' => $this->first_name,
            ':adress' => $this->adress
        ]);
    }

    public function all(): array {
        $sql = "SELECT * FROM users";
        $stmt = $this->co->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
