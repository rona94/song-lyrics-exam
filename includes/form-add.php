<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $song_lyrics = $_POST["song_lyrics"];
    $date_created = date("Y-m-d");

    try {
        require_once "db-host.php";
        
        $query = "INSERT INTO song (title, artist, date_created, song_lyrics) VALUES (:title, :artist, :date_created, :song_lyrics);";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":artist", $artist);
        $stmt->bindParam(":date_created", $date_created);
        $stmt->bindParam(":song_lyrics", nl2br($song_lyrics));

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