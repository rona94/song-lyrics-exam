<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    try {
        require_once "db-host.php";
        
        $query = "SELECT * FROM song where id=:id;";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}