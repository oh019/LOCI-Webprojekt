<?php
session_start();
include 'database.php';
//die Datenbankverbindung wirder hergestellt

if(isset($_POST["Nutzername"]) AND isset($_POST["Passwort"]))
//es wird überprüft ob der User das Formular ausgefüllt hat
{
    $nutzername=$_POST["Nutzername"];
    $passwort=$_POST["Passwort"];
}
else
{
    echo"Keine Daten";
    die();
}

$statement = $pdo->prepare("SELECT * FROM users WHERE USERNAME=:nutzername AND PASSWORT=:passwort");
//es werden die Daten aus der Datenbank ausgelesen
if($statement->execute(array(':nutzername'=>$nutzername, ':passwort'=>$passwort))) {
    if($row=$statement->fetch()) {
        //echo "angemeldet";
        $_SESSION["angemeldet"]=$row["USERNAME"];
        //falls der User mit den eingegebenen Daten gefunden wird, wird er angemeldet
    }
    else
    {
        echo"nicht berechtigt";
    }
    //falls der User mit den eingegebenen Daten nicht gefunden wird, kommt eine Meldung
} else {
    echo "Datenbank-Fehler:";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die();
}

$query =  $pdo->prepare ( "SELECT USER_ID FROM users WHERE USERNAME=:nutzername AND PASSWORT=:passwort");
$query->execute(array(':nutzername'=>$nutzername, ':passwort'=>$passwort));
$result = $query->fetch(  PDO::FETCH_ASSOC);
$user_id = $result ["USER_ID"];
$_SESSION['aktiveruser'] = $user_id;

//wenn der User mit den angegebenen Daten gefunden wird, wird die Session gesetzt

if (isset($_POST['Login'])) {
    header('Location: profile.php');
 //wenn man auf den Login-Button klickt, wird er auf profile.php weitergeleitet
} elseif (isset($_POST['Register'])) {
    header('Location: register.php');
    //wenn man auf den Registrierung-Button klickt, wird er auf registerphp weitergeleitet
} else {
    echo 'something went wrong';
    }
