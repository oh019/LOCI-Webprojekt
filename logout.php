<?php
session_start();

session_unset();
//unset all the variables in this session

session_destroy();

header ("Location:index.php");

//get back to the front page
echo" Logout erfolgreich.";