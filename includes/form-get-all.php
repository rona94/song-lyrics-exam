<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {
    try {
        require_once "db-host.php";
        
        $query = "SELECT * FROM song;";
        $stmt = $pdo->prepare($query);

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}