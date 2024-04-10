<?php
    function afficherTableau() {
        $rows = getAllUsers(); // Récupérer toutes les lignes de la base de données
?>
        <table border="1" style="width:100">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
<?php
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>"; 
            echo "<td>" . $row['prenom'] . "</td>"; // Afficher le prénom
            echo "<td>" . $row['nom'] . "</td>"; // Afficher le nom
            echo "<td>" . $row['age'] . "</td>"; // Afficher l'âge
            echo "<td>" . $row['adresse'] . "</td>";
            echo "<td>";
            echo "<a href='modifierUtilisateur.php?id=" . $row['id'] . "' style='color: blue; text-decoration: none;'>Modifier</a> &nbsp &nbsp &nbsp";
            echo "<a href='#' onclick='confirmerSuppression(" . $row['id'] . ")' style='color: red; text-decoration: none;'>Supprimer</a>";
            echo "</td>";
            echo "</tr>";
        }
?>
        </table>
        <script>
        function confirmerSuppression(userId) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                window.location.href = "supprimerUtilisateur.php?id=" + userId;
            }
        }
        </script>
<?php
    }
?>
