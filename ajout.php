<?php
require_once('./conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];
    $email = $_POST['email'];
    $phone = $_POST['téléphone'];
    $role = $_POST['rôle'];
    $teamId = $_POST['équipe_ID'];
    $statut = $_POST['statut'];

    try {
        
        $stmt = $conn->prepare("INSERT INTO personnel (nom, prénom, email, téléphone, rôle, équipe_ID, statut) 
                                VALUES (? , ? , ? , ? , ? , ? , ?)");

        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $phone);
        $stmt->bindParam(5, $role);
        $stmt->bindParam(6, $teamId);
        $stmt->bindParam(7, $statut);


        if ($stmt->execute()) {
            
            header("Location: dash.php");
            exit();
        } else {
            echo "Execute failed";
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include('ajout_form.php');

$conn = null;
?>