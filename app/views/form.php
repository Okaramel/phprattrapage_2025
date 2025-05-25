<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter un utilisateur</title>
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
                <a href="/phprattrapage_2025/app/views/user.php">Espace utilisateur</a>
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
                <option value="salade_roquette">Salade de roquette aux figues et aux poires</option>
                <option value="salade_chevre">Salade au chèvre chaud</option>
                <option value="salade_cesar">Salade César</option>
                <option value="salade_printaniere">Salade printanière</option>
            </select>


            <button type="submit">Envoyer</button>
        </form>

</main>
</body>
</html>
