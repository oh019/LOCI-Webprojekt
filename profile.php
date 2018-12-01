<?php
session_start();
include_once 'database.php';

?>

<!DOCTYPE html>
<html>

<head>

    <title></title>



    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

</head>

<body>

<?php
$user_id = $_SESSION['aktiveruser'];
echo 'user nr "$user_id" ist angemeldet.';
if(isset($_SESSION["angemeldet"]))
{
    echo"angemeldet.";
}
else
{
    echo"nicht angemeldet.";
    die();
}
echo"<br>";
echo"<br>";
$content= $_POST["content"];
echo $content;
include 'database.php';
$statement = $pdo->prepare("SELECT * FROM posts");
if($statement->execute()) {
    while($row=$statement->fetch()) {
        echo $row['POST_ID']." ".$row['TEXT']." ".$row['USER_ID'];
        echo "<a href=\"edit.php?id=".$row['POST_ID']."\">EDIT</a>";
        echo "<br>";
    }
} else {
    echo "Datenbank-Fehler:";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die();
}
?>
?>

<!--//we only can see upload images if we are logged in!-->

<form action="do_upload.php" method="POST" enctype="multipart/form-data">
    <!--enctype - braucht man für um die Bilder in upload.php zu übergeben-->

    <input type="file" name="file">

    <!--"choose file" button-->
    <button type="submit" name="submit">Bild hochladen</button>
</form>
