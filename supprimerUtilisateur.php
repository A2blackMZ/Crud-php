<?php
include 'mesFonctionsSQL.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteUser($id);

    // Redirection vers la page principale après la suppression
    header("Location: walk.php");
    exit();
} else {
    // Gérer le cas où l'ID n'est pas spécifié
    echo "Utilisateur inexistant";
}
?>
