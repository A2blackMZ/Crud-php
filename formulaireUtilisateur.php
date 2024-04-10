<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulaire d'Enregistrement d'Utilisateur</title>
</head>
<body>
    <h2>Formulaire d'Enregistrement d'Utilisateur</h2>
    <form action="registerUser.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse"><br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
