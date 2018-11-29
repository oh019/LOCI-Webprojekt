<?php
session_start();

include 'database.php';
if(isset($_POST["Nutzername"]) AND isset($_POST["Passwort"]) AND isset($_POST["Attribut"]))
{
    $nutzername=$_POST['Nutzername'];
    $passwort=$_POST['Passwort'];
    $attribut=$_POST['Attribut'];
    $email=$_POST ['Email'];
}
else
{
    echo"Bitte alles ausfüllen!";
    die();
}
// include 'database.php';



$statement = $pdo->prepare("INSERT INTO users (USERNAME, PASSWORT, STUDIENGANG, EMAIL) VALUES ('$nutzername',$passwort,$attribut,$email)");
mysqli_query($conn,$sql);
//$statement->execute(array($nutzername, $passwort, $attribut, $email));
$statement->execute(array($nutzername, $passwort, $attribut, $email));
$result = mysqli_query($pdo,$statement);
echo "Sie wurden erfolgreich registriert!";
        header('Location: index.php');

        if (mysqli_num_rows($statement)>0) {
            while ($row = mysqli_fetch_assos ($statement))
        }