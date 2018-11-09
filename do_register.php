<?php
session_start();


if(isset($_POST["Nutzername"]) AND isset($_POST["Passwort"]) AND isset($_POST["Attribut"]))
{
    $nutzername=$_POST["Nutzername"];
    $passwort=$_POST["Passwort"];
    $attribut=$_POST["Attribut"];
}
else
{
    echo"Bitte alles ausfüllen!";
    die();
}
include 'database.php';



$statement = $pdo->prepare("INSERT INTO users (USERNAME, PASSWORT, ATTRIBUT) VALUES ($nutzername, $passwort, $attribut)");

$statement->execute(array(':nutzername'=>$nutzername, ':passwort'=>$passwort, ':attribut'=>$attribut));
echo "Sie wurden erfolgreich registriert!";
        header('Location: index.php');