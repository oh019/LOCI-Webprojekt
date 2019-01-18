<?php
session_start();
include 'database.php';
$user_id = $_SESSION['aktiveruser'];
$nutzer = $_SESSION['aktiveruser_name'];
if (isset($_POST ['submit'])){//um eine Datei hochzuladen-> müssen wir zuerst die Infos über die Datei zu bekommen
    $file = $_FILES['file'];//Variable $file definieren als $_FILES-> holt die ganze Infos von "input" vom Formular

    $fileName = $_FILES['file']['name'];   //extract all the informations from the file-> what kind of type it is
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size']; //"name"- to get the name of the file and so on
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode ('.', $fileName);
    //explode the name by the punctuation and get two different names->take apart a certain string "." from the punctuation
    //say what type of files we allow to upload to our website
    //so we get two pieces of information- the name of the file and the name of extention
    $fileActualExt = strtolower($fileExt[1]);
    //make sure that we always make it lower case before checking it
    //"end"- function - to get the last piece of data from the array
    //so we have the extension from the file we have just uploaded

    $allowed = array('jpg', 'jpeg', 'png');
    //tell what type of files we allow to upload

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $PictureNewName = uniqid ('', true) . "." . $fileActualExt;
                // we create a unique id name so that the file won't get replaced with a file with the same name
                //then we add a name of the extension behind our new unique name
                $fileDestination = '/home/oh019/public_html/uploads/' . $PictureNewName;
                move_uploaded_file($fileTmpName, $fileDestination);//das hochgeladene Bild wird in den Ordner $fileDestination geschoben

                $activeuser = $_SESSION['activeruser'];
                $success = $statement = $pdo->prepare("
                  INSERT INTO profileimg (USER_ID,filename)
                  VALUES ('$activeuser', '$fileDestination')");
                //User ID und Verweis auf den Pfad auf dem Server, wo das Bild liegt
                $statement->execute();

                if ($success) {
                    header("Location:home.php?uploadsuccess");
                } else {
                    header("Location:home.php?uploadfailed");
                }
            }  else {
                echo "Diese Datei ist zu groß!";
            }
        } else {
            echo "Beim hochladen dieser Datei ist ein Fehler aufgetreten";
        }
        // check if we had mistakes uploading this file
    } else {
        echo "Dieser Dateityp  darf nicht hochgeladen werden";
    }


    //check if the file is allowed (if it has the proper extension)-> check if amy of these extensions listed in $allowed are inside $fileActualExt
//ansonsten kommt die Fehlermeldung

}


//überprüfen ob Button geklickt wurde und ob der Benutzer das Bild hochladen möchte
//submit weil wir "submit" als Name für unsere Button verwenden
