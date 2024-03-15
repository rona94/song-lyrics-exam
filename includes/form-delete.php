<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    try {
        require_once "db-host.php";
        
        $query = "DELETE FROM song WHERE id=:id";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}