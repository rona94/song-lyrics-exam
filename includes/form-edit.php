<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $song_lyrics = $_POST["song_lyrics"];

    try {
        require_once "db-host.php";
        
        $query = "UPDATE song SET title = :title, artist = :artist, song_lyrics = :song_lyrics WHERE id= :id;";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":artist", $artist);
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