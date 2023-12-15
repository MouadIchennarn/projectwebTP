<?php
require_once('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Membre_ID'])) {
    
    $userId = $_GET['Membre_ID'];

    try {
        
        $stmt = $conn->prepare("DELETE FROM personnel WHERE Membre_ID = :Membre_ID");

        
        $stmt->bindParam(':Membre_ID', $userId);
        $stmt->execute();
        header("Location: dash.php");
        exit();
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


$conn = null;
?>