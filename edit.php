<?php
if(isset($_SESSION["angemeldet"]))
{
    echo"angemeldet.";
}
else
{
    echo"nicht angemeldet.";
    die();
}

$id=$_GET['id'];

include 'database.php';

$abfrage="SELECT * FROM posts WHERE id=$id";
$ergebnis=$pdo->query($abfrage);

$row=$ergebnis->fetch ( PDO::FETCH_ASSOC);

?>
<form action="do_edit.php?id=<?php echo $id; ?>" method="POST">
    <textarea name="content" rows"50" cols="300"><?php echo $row["content"]; ?> </textare>
    <input type="submit">
</form>
