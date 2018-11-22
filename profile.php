<?php
session_start();
include_once 'database.php';

?>

<!DOCTYPE html>
<html>

<head>

    <title></title>



</head>

<body>

<?php
if (isset ($_SESSION ['id'])) {
    if ($_SESSION ['id'] == 1) {
        echo "Du hast dich als user#1 eingeloggt";

    }

    echo "<form action=\'upload.php\' method=\'POST\' enctype=\'multipart/form-data\'>
    
    <input type=\'file\' name=\'file\'>

    <button type=\'submit\' name=\'submit\'>Bild hochladen</button>
</form>";

    //we have our picture upload form inside our statement-> it checks if we are logged in-> when we are not logged in we cannot see the form


} else {
    echo "Du bist nicht eingeloggt!";
}


?>

<!--//we only can see upload images if we are logged in!-->

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <!--enctype - braucht man für um die Bilder in upload.php zu übergeben-->

    <input type="file" name="file">

    <!--"choose file" button-->
    <button type="submit" name="submit">Bild hochladen</button>
</form>
<!-- ein Bild auf die Website hochladen
