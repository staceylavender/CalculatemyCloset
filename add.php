<?php
require_once "login.php";
session_start();

if ( isset($_POST['type']) && isset($_POST['color'])  && isset($_POST['pattern'])  && isset($_POST['size']) && isset($_POST['fit']) 
     && isset($_POST['price'])) {
	//if (is_numeric ($_POST['Playcount']) && is_numeric ($_POST['Rating'])) {
		$type = mysql_real_escape_string($_POST['type']);
		$color = mysql_real_escape_string($_POST['color']);
		$pattern = mysql_real_escape_string($_POST['pattern']);
		$size = mysql_real_escape_string($_POST['size']);
		$fit = mysql_real_escape_string($_POST['fit']);
		$price = mysql_real_escape_string($_POST['price']);
		$sql = "INSERT INTO jeffwarner (type, color, pattern, size, fit, price) 
				VALUES ('$type', '$color', '$pattern', '$size', '$fit', '$price')";
		mysql_query($sql); 
		$_SESSION['success'] = 'Record Added';
		header( 'Location: profilepage.php' ) ;
		return;
        }
?>
<p>Add A New Item</p>
<form method="post">
<p>Type:
<input type="text" name="type"></p>
<p>Color:
<input type="text" name="color"></p>
<p>Pattern:
<input type="text" name="pattern"></p>
<p>Size:
<input type="text" name="size"></p>
<p>Fit:
<input type="text" name="fit"></p>
<p>Price:
<input type="text" name="price"></p>
<p><input type="submit" value="Add New"/>
<a href="profilepage.php">cancel</a></p>
</form>