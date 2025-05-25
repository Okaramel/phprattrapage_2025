<?php
require_once __DIR__ . '/../controllers/UserController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new UserController();
    $controller->handleFormSubmission($_POST);
    header('Location: ../views/form.php');
    exit();
}
?>
