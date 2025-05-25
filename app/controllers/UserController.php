<?php

require_once __DIR__ . '/../models/User.php';

use App\models\User;

class UserController
{
    public function getUsers(): array {
        $user = new User();
        return $user->all();
    }

    public function updateUserStatut($user_id, $new_statut) {
        $user = new User();
        $user->updateStatut($user_id, $new_statut);
    }
    

    public function addUser(string $last_name, string $first_name, string $adress, string $dish, float $price, string $statut): void {
        $user = new User($last_name, $first_name, $adress, $dish, $price, $statut);
        $user->save();
    }

    public function handleFormSubmission(array $formData): void {
        $last_name = htmlspecialchars($formData['last_name'] ?? '');
        $first_name = htmlspecialchars($formData['first_name'] ?? '');
        $adress = htmlspecialchars($formData['adress'] ?? '');
        $dish = htmlspecialchars($formData['dish'] ?? '');
    
        // Validation simple (obligatoire ici pour pas d'erreur)
        if (empty($last_name) || empty($first_name) || empty($adress) || empty($dish)) {
            throw new Exception("Tous les champs sont obligatoires.");
        }

        $price = mt_rand(1000, 10000) / 100;
        $statut = 'Commande prise en compte';
        


        $this->addUser($last_name, $first_name, $adress, $dish, $price, $statut);
    }
    
}
