<?php

require_once __DIR__ . '/../models/User.php';

use App\models\User;

class UserController
{
    public function getUsers(): array {
        $user = new User();
        return $user->all();
    }

    public function addUser(string $last_name, string $first_name, string $adress, string $dish): void {
        $user = new User($last_name, $first_name, $adress, $dish);
        $user->save();
    }

    public function handleFormSubmission(array $formData): void {
        $last_name = htmlspecialchars($formData['last_name'] ?? '');
        $first_name = htmlspecialchars($formData['first_name'] ?? '');
        $adress = htmlspecialchars($formData['adress'] ?? '');
        $dish = htmlspecialchars($formData['dish'] ?? '');
    
        // Validation simple (optionnelle ici)
        if (empty($last_name) || empty($first_name) || empty($adress) || empty($dish)) {
            throw new Exception("Tous les champs sont obligatoires.");
        }
    
        $this->addUser($last_name, $first_name, $adress, $dish);
    }
    
}
