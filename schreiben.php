<?php
session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>
        Formular
    </title>
</head>
<body>
<form action="do_schreiben.php" method="post">
        <textarea name="TEXT" rows="10" cols="30">
        </textarea>
    <input type="submit">
</form>

</body>

</html>