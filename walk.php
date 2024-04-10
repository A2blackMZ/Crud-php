<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Crud php</title>
</head>
<body>
    <h1>CRUD PHP</h1>
    <div class="button"><a href="formulaireUtilisateur.php">Création</a></div>
    <?php
        include 'mesFonctionsSQL.php';
        include 'mesFonctionsTable.php';
        afficherTableau();
    ?>
    <!--<hr>-->
</body>
</html>