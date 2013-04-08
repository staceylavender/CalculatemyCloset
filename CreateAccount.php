<?php
require_once "login.php";
session_start();

if ( isset($_POST['firstname']) && isset($_POST['lastname']) 
     && isset($_POST['email'])&& isset($_POST['password'])) 
  {

   $firstname = mysql_real_escape_string($_POST['firstname']);
   $lastname = mysql_real_escape_string($_POST['lastname']);
   $email = mysql_real_escape_string($_POST['email']);
   $password = mysql_real_escape_string($_POST['password']);
   $tablename = $firstname.$lastname;
   $_SESSION ['tablename']=$tablename; //add tablename into session
   $sql = "INSERT INTO users (lastname, firstname, email, password) 
              VALUES ('$lastname', '$firstname', '$email', '$password')";
	mysql_query($sql);
	$sql2 = "CREATE TABLE $tablename(id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY, name VARCHAR(100), type VARCHAR(30), color VARCHAR(30), pattern VARCHAR(30), size VARCHAR(10), fit VARCHAR(30), price VARCHAR(30), worn CHAR(6))";
	mysql_query($sql2);
	$_SESSION['success'] = 'Record Added';
    header( 'Location: organize1.php' );
	return;} 
?>

<head>
    <title>Calculate My Closet</title>
<head>
<body>
    <h1 style="font-family:Futura">Calculate My Closet</h1>
    <h3 style="font-family:Futura">By Kendra Cunningham, Stacey Lavender, and Jeff Warner</h3>
    
	<p>Create Your Account</p>
	<form method="post">
	<p>First Name:
	<input type="text" name="firstname"></p>
	<p>Last Name:
	<input type="text" name="lastname"></p>
	<p>Email Address:
	<input type="text" name="email"></p>
	<p>Password:
	<input type="text" name="password"></p>
	<p><input type="submit" value="Create Account"/>
	<a href="home.php">Cancel</a></p>
	</form>
</body>





