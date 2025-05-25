<?php
//Charger l'autoload et .env
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


require_once __DIR__ . '/app/controllers/UserController.php';
$userController = new UserController();
$users = $userController->getUsers();

// charger la vue layout
$title = 'Liste des utilisateurs';
require_once __DIR__ . '/app/views/layout.php';
