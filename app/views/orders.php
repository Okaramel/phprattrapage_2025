<?php
require_once __DIR__ . '/../controllers/UserController.php';

$controller = new UserController();
$users = $controller->getUsers();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'], $_POST['new_statut'])) {
    $user_id = $_POST['user_id'];
    $new_statut = $_POST['new_statut'];

    $controller->updateUserStatut($user_id, $new_statut);

    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title><?= htmlspecialchars('Mongoo | Salade sur mesure') ?></title>
<link rel="stylesheet" href="/phprattrapage_2025/public/css/style.css">
<link rel="icon" href="/phprattrapage_2025/public/images/logo.ico" type="image/x-icon">
</head>
<body>
<header>
    <ul class="list">
        <li class="list_item"><a href="/">Accueil</a></li>
        <li class="list_item"><a href="/phprattrapage_2025/app/views/form.php">Formulaire</a></li>
        <li class="list_item"><a href="/phprattrapage_2025/app/views/orders.php">Commandes</a></li>
    </ul>
</header>

<main>
    <h1>Liste des commandes</h1>

    <?php if (!empty($users)): ?>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Plat</th>
                <th>Prix</th>
                <th>Statut</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <?php
                $statut = strtolower($user['statut']);
                $selectClass = '';

                if (strpos($statut, 'prise') !== false) {
                    $selectClass = 'select-pris';
                } elseif (strpos($statut, 'en cours') !== false) {
                    $selectClass = 'select-encours';
                } elseif (strpos($statut, 'réalisée') !== false) {
                    $selectClass = 'select-realisee';
                } elseif (strpos($statut, 'annulée') !== false) {
                    $selectClass = 'select-annulee';
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['adress']) ?></td>
                    <td><?= htmlspecialchars($user['dish']) ?></td>
                    <td><?= htmlspecialchars($user['price']) ?> €</td>
                    <td>
                        <form class="form_dropdownmenu" method="POST" style="display: inline;">
                            <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id']) ?>">
                            <select name="new_statut" class="<?= $selectClass ?>">
                                <option value="Prise en compte" <?= $user['statut'] === 'Commande prise en compte' ? 'selected' : '' ?>>Commande prise en compte</option>
                                <option value="En cours" <?= $user['statut'] === 'En cours' ? 'selected' : '' ?>>En cours</option>
                                <option value="Réalisée" <?= $user['statut'] === 'Réalisée' ? 'selected' : '' ?>>Réalisée</option>
                                <option value="Annulée" <?= $user['statut'] === 'Annulée' ? 'selected' : '' ?>>Annulée</option>
                            </select>
                            <button class="maj" type="submit">Mettre à jour</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Aucune commande trouvée.</p>
    <?php endif; ?>
</main>
</body>
</html>
