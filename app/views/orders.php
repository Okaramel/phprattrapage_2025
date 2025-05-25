<?php
require_once __DIR__ . '/../controllers/UserController.php';

$controller = new UserController();
$users = $controller->getUsers();

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
            <li class="list_item">
                <a href="/">Accueil</a>
            </li>
            <li class="list_item">
                <a href="/phprattrapage_2025/app/views/form.php">Formulaire</a>
            </li>
            <li class="list_item">
                <a href="/phprattrapage_2025/app/views/orders.php">Commandes</a>
            </li>
        </ul>
    </header>
    <main>
    <?php if (empty($users)): ?>
    <p>Aucune commande trouvée.</p>
  <?php else: ?>
    <table border="1" cellpadding="5" cellspacing="0">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Adresse</th>
          <th>Salade</th>
          <th>Prix (€)</th>
          <th>Statut</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?= htmlspecialchars($user['last_name']) ?></td>
            <td><?= htmlspecialchars($user['first_name']) ?></td>
            <td><?= htmlspecialchars($user['adress']) ?></td>
            <td><?= htmlspecialchars($user['dish']) ?></td>
            <td><?= number_format((float)$user['price'], 2, ',', ' ') ?></td>
            <td><?= htmlspecialchars($user['statut']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
    </main>
</body>
</html>
