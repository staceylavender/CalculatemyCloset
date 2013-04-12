<?php
$db = mysql_connect("localhost", "jerf", "password");
if ( $db === FALSE ) die('Fail message');
if ( mysql_select_db("calculatemycloset") === FALSE ) die("Fail message");
?>