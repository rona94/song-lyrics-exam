<?php

$servername = "localhost:3306";
$database = "song_lyrics";
$username = "root";
$password = "h3L!0@1";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo "Error: ".$e;
}