
<?php
session_start();
include 'database.php';
if(isset($_POST["Nutzername"]) AND isset($_POST["Passwort"]) AND isset($_POST["Attribut"]))


{
    $nutzername=$_POST["Nutzername"];
    $passwort=$_POST["Passwort"];
    $attribut=$_POST["Attribut"];
    $email=$_POST ['Email'];
}
else
{
    echo"Bitte alles ausfüllen!";
    die();
}

    $statement = $pdo->prepare("INSERT INTO users (USERNAME, PASSWORT, STUDIENGANG, EMAIL) VALUES (?,?,?,?)");

    $statement->execute(array($nutzername, $passwort, $attribut, $email));

if (isset($_POST['Login'])) {
    header('Location: index.php');
} elseif (isset($_POST['Registrierung'])) {
    header('Location: profile.php');
} else {
    echo 'something went wrong';
}

/*echo "Du wurdest erfolgreich registriert!";
        header('Location: index.php');*/
?>


