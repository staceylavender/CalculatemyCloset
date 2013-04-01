<!--This page actually creates a clothing table for the user in the database-->
<?php
require_once "login.php";
session_start();
$sql="CREATE TABLE persons(Firstname CHAR(30),Lastname CHAR(30),Age INT)";

?>
