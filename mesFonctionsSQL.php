<?php
    function getDatabaseConnexion(){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=crud_php', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br>";
            die();
        }

    }

    function getAllUsers(){
        $con = getDatabaseConnexion();
        $request = 'SELECT * FROM utilisateurs';
        $row = $con->query($request);
        return $row;
    }

    function readUser($id){
        $con = getDatabaseConnexion();
        $request = "SELECT * FROM utilisateurs where id = '$id'";
        $stmt = $con->query($request);
        $row = $stmt->fetchAll();
        if (!empty($row)){
            return $row[0];
        }
    }

    function createUser($nom, $prenom, $age, $adresse){
        try{
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO utilisateurs (nom, prenom, age, adresse) VALUES ('$nom', '$prenom', '$age', '$adresse')";
            $con->exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
    function updateUser($id, $nom, $prenom, $age, $adresse){
        try{
            $con = getDatabaseConnexion();
            $request = "UPDATE utilisateurs set
                        nom = '$nom',
                        prenom = '$prenom',
                        age = '$age',
                        adresse = '$adresse'
                        where id = '$id'";
            $stmt = $con->query($request);
        }
        catch(PDOException $e) {
            echo $request . "<br>" . $e->getMessage();
        }
    }
    
    function deleteUser($id){ 
        try {
            $con = getDatabaseConnexion();
            $request = "DELETE from utilisateurs where id = '$id'";
            $stmt = $con->query($request);
        }
        catch(PDOException $e) {
            echo $request . "<br>" . $e->getMessage();
        }
    }
    
    
?>