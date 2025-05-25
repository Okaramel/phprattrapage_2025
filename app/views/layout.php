<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars('Mon titre') ?></title>
</head>
<body>
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
