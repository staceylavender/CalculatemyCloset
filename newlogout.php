<?php // Example 21-12: logout.php
session_start();
echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>";
include 'functions.php';

if (isset($_SESSION['email']))
{
    destroySession();
    echo "<div class='main'>You have been logged out. Please " .
         "<a href='home.php'>click here</a> to refresh the screen.";
}
else echo "<div class='main'><br />" .
          "You cannot log out because you are not logged in";
?>

<br /><br /></div></body></html>
