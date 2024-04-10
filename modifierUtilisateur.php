<?php
include 'mesFonctionsSQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $adresse = $_POST["adresse"];

    updateUser($id, $nom, $prenom, $age, $adresse);

    // Redirection vers la page principale après la modification
    header("Location: walk.php");
    exit();
}

// Récupérer l'utilisateur à modifier
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = readUser($id);
} else {
    // Gérer le cas où l'ID n'est pas spécifié
    echo "Utilisateur inexistant";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Modifier Utilisateur</title>
</head>
<body>
    <h2>Modifier Utilisateur</h2>
    <form action="modifierUtilisateur.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" value="<?php echo $user['age']; ?>" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $user['adresse']; ?>"><br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
