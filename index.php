<?php
session_start();
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>
        LOCI
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="grid.css">
    <style>


        h1
        {
            background-color: transparent ;
            border-style: solid;
            border:0px;
            border-color: cadetblue;
            width:100%;
            height:200px;
            text-align: center;
            padding-top: 50px;
        }
        header
        {
            height:200px;
            font-family: 'Open Sans Condensed', sans-serif;
            background-image: url("LOCI.png");
            background-size:120px 100px;
            background-color: gainsboro;
            background-position: left top;
            box-shadow:30px 10px 35px #002;

        }
        main{

        }

        main2{

        }

        footer{

        }
        #ul{
            list-style:none;
        }
         #navigation {
            width:150px;
            height:50px;
            float:left;
            Background-color: #a9bdff;
            text-decoration:none;
            font-family: "Comic Sans MS";
            border-left:5px;
            border-left-color: #264264;
            border-style:solid;
            padding-top:5px;
            padding-left:10px;
        }
        #navigation:hover {
            background-color: #947eff;
        }
        @media screen and (max-width: 1000px;) {
            #navigation {
                background-color: red;
                width: 80%;
                height: 50px;
            }
        }



    </style>
</head>
<body>

<header>

   <h1>Willkommen bei LOCI</h1>
</header>

<main>
    <div class="section group">
        <div class="col span_1_of_3">
           <ul id="ul"> <li><a id="navigation" href="login.html">Login</a></li>
               <li><a id="navigation" href="register.html">Registrieren</a></li>
               <li><a id="navigation" href="logout.php">Logout</a></li></ul>

        </div>
        <div class="col span_2_of_3">
            <ul id="ul"> <li><a id="navigation" href="schreiben.php" >neuer Beitrag</a></li></ul><br><br><br><br>
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
            echo"<br>";
            $content= $_POST["content"];
            echo $content;

            $pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-oh019', 'oh019', 'oS7ez3seiZ',array('charset'=>'utf8'));


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
        </div>
        <div class="col span_3_of_3">
            <li> NEWS BEREICH</li>
        </div>
    </div>


    </br>
    </br>
    </br>

</main>
<br>

<main2>

</main2>

<footer>

</footer>
</body>

</html>
