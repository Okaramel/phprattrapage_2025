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
        <h1>Ajouter un utilisateur</h1>

        <form action="../models/save_user.php" method="POST">
            <label for="last_name">Nom :</label>
            <input type="text" name="last_name" id="last_name" required><br>

            <label for="first_name">Prénom :</label>
            <input type="text" name="first_name" id="first_name" required><br>

            <label for="adress">Adresse :</label>
            <input type="text" name="adress" id="adress" required><br>

            <label for="dish">La salade souhaitée :</label>
            <select name="dish" id="dish" required>
                <option value="">-- Sélectionner une salade --</option>
                <option value="Salade Roquette">Salade de roquette aux figues et aux poires</option>
                <option value="Salade Chèvre">Salade au chèvre chaud</option>
                <option value="Salade Cesar">Salade César</option>
                <option value="Salade Printanière">Salade printanière</option>
            </select>


            <button type="submit">Envoyer</button>
        </form>

</main>
</body>
</html>
