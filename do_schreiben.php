<?php
session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}
{
    $text = $_POST["TEXT"];
    echo $text;

    include 'database.php';


    $statement = $pdo->prepare("INSERT INTO posts (TEXT) VALUES (?)");
    $statement->execute(array($text));
    echo "id in der Datenbank: ".$id=$pdo->lastInsertId();
}

;