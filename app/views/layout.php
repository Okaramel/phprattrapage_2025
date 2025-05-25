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
                <a href="/phprattrapage_2025/index.php">Accueil</a>
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
       <h1>Liste des utilisateurs</h1>
       <?php if (empty($users)): ?>
            <p>Aucun utilisateur trouvé.</p>
        <?php else: ?>
            <?php foreach ($users as $user): ?>
                <div class="user">
                    <p><?= htmlspecialchars($user['last_name']) ?></p>
                </div>
            <?php endforeach; ?>
       <?php endif; ?>
    </main>
</body>
</html>
