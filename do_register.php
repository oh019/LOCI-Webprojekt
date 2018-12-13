
<?php
session_start();
include 'database.php';
if(isset($_POST["Nutzername"]) AND isset($_POST["Passwort"]) AND isset($_POST["Attribut"]))
//es wird überprüft ob der User die Felder ausgefüllt hat


{
    $nutzername=$_POST["Nutzername"];
    $passwort=$_POST["Passwort"];
    $attribut=$_POST["Attribut"];
    $email=$_POST ['Email'];
}
//Werte des Formulars werden den Variablen zugewiesen

else
{
    echo"Bitte alles ausfüllen!";
    die();
}

$statement = $pdo->prepare("INSERT INTO users (USERNAME, PASSWORT, STUDIENGANG, EMAIL) VALUES (?,?,?,?)");
$success = $statement->execute(array($nutzername, $passwort, $attribut, $email));
//die angegebenen Daten werden in die Datenbank geschrieben


if ($success) {
    echo "Du wurdest erfolgreich registriert!";
} else {
    echo "Die Registrierung hat nicht geklappt! :(";
}

?>


