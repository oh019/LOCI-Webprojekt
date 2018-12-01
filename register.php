<?php
session_start();
include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0"> <!-- корректное отображение на мобильных устройствах, отмена масштабирования -->
    <title>Einloggen</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--  css -->
    <link href="main.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 bg_section_signup">
                <img class="logo" src="LOCI.png" alt="logo"/>
            </div>
            <div class="col-12 m_bg_section_signup">
                <img class="logo" src="LOCI.png" alt="logo"/>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 signup_section">
                <form action="do_register.php" method="post" class="needs-validation" novalidate>
                    <h1>Willkommen bei LOCI</h1>
                    <div class="error" id="mail-error">
                        <img src="bilder/error.svg" alt="error_icon"/>
                        Falsche Benutzername
</div>
                    <div class="form-row">
                        <input type="text" class="form-control"  id="name" aria-describedby="emailHelp" placeholder="Benutzername" required>
                    </div>
                    <div class="form-row">
                        <input type="email" class="form-control" id="mail" placeholder="Email" required>
                    </div>
                   <!--<div class="form-row">
                        <input type="email" class="form-control" id="re_mail" placeholder="Email wiederholden" required>
                    </div>-->
                    <div class="form-row">
                        <input type="text" class="form-control"  id="studiengang"  placeholder="Studiengang" required>
                    </div>

                    <div class="form-row">
                        <input type="password" class="form-control" id="password" placeholder="Passwort" required>
                    </div>
                    <div class="form-row">
                        <input type="password" class="form-control" id="re_password" placeholder="Passwort wiederholen" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="login_check">
                        <label class="form-check-label" for="login_check">Mit der Anmeldung stimmst du <a href="#"> unseren Nutzungsbedgungen</a>, <a href="#">und Datenschutzrichtlinie </a>zu</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="Registrierung" value="Anmelden">
                    <div class="bigger_text">Du hast bereits einen Account? </div>
                    <input type="submit" class="btn btn-outline-primary" name="Login" value="Einloggen"/>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- JS -->
<script src="index.js"></script>
</body>
</html>

