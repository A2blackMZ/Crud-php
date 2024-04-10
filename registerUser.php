<?php
    /*error_reporting(E_ALL);
    ini_set('display_errors', 1);*/

    include "mesFonctionsSQL.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $age = $_POST["age"];
        $adresse = $_POST["adresse"];

        createUser($nom, $prenom, $age, $adresse);

        echo "Utilisateur enregistré avec succès !";

        // Rediriger vers la page principale après 2 secondes
        sleep(2);
        header("Location: walk.php");
        exit; // Assurez-vous de terminer l'exécution du script après la redirection
    }
?>
