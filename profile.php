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
/*
$statement = "SELECT * FROM users";
$result = mysqli_query($pdo,$statement);
if (mysqli_num_rows ($result) >0) {
    while ($row =mysqli_fetch_assoc ($result)) {
        $id=$row ['id'];
        $sqlImg = "SELECT * FROM profileImg WHERE userid= '$id'";
        $resultImg = mysqli_query ($pdo, $sqlImg);
        while ($rowImg = mysqli_fetch_assoc ($resultImg));{
            echo "<div>";
            if ($rowImg ['status'] ==0) {
                echo "<img src='uploads/profile".$id.".jpg'>";
                } else {
                echo "<img src='uploads/profiledefault.jpg'>";

            }
            echo $row ['username'];

            echo "</div>";

        }
    }
} else {
    echo "Keine Users gefunden";
}




/*if (isset ($_SESSION ['id'])) {
    if ($_SESSION ['id'] == 1) {
        echo "Du hast dich als user#1 eingeloggt";

    } */

   /* echo "<form action=\'upload.php\' method=\'POST\' enctype=\'multipart/form-data\'>
    
    <input type=\'file\' name=\'file\'>

    <button type=\'submit\' name=\'submit\'>Bild hochladen</button>
</form>";*/

    //we have our picture upload form inside our statement-> it checks if we are logged in-> when we are not logged in we cannot see the form


/*} else {
    echo "Du bist nicht eingeloggt!";
}
*/

?>

<!--//we only can see upload images if we are logged in!-->

<form action="do_upload.php" method="POST" enctype="multipart/form-data">
    <!--enctype - braucht man für um die Bilder in upload.php zu übergeben-->

    <input type="file" name="file">

    <!--"choose file" button-->
    <button type="submit" name="submit">Bild hochladen</button>
</form>
<!-- ein Bild auf die Website hochladen


<form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='files[]' multiple />
  <input type='submit' value='Submit' name='submit' />
</form>