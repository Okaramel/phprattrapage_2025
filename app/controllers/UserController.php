<?php

require_once __DIR__ . '/../utils/db.php';

class UserController extends Bdd
{
    public function __construct() {
        parent::__construct(); // initialise la connexion
    }

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->co->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
