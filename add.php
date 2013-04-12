<?php
session_start();
include 'functions.php';

$tableemail = $_SESSION['email'];
$tablename = $tableemail.'table';

if ( isset($_POST['name']) && isset($_POST['type']) && isset($_POST['color']) && isset($_POST['pattern'])
	&& isset($_POST['size']) && isset($_POST['fit']) && isset($_POST['price']) && isset($_POST['worn']) )
		{
		$name = mysql_real_escape_string($_POST['name']);
		$type = mysql_real_escape_string($_POST['type']);
		$color = mysql_real_escape_string($_POST['color']);
		$pattern = mysql_real_escape_string($_POST['pattern']);
		$size = mysql_real_escape_string($_POST['size']);
		$fit = mysql_real_escape_string($_POST['fit']);
		$price = mysql_real_escape_string($_POST['price']);
		$worn = mysql_real_escape_string($_POST['worn']);
		$sql = "INSERT INTO $tablename (name, type, color, pattern, size, fit, price, worn) 
				VALUES ('$name', '$type', '$color', '$pattern', '$size', '$fit', '$price', '$worn')";
		mysql_query($sql); 
		$_SESSION['success'] = 'Record Added';
		header( 'Location: profilepage.php' ) ;
		return;
        }
?>
<p>Add A New Item</p>
<form method="post">
<p>Name:
<input type="text" name="name"></p>
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
<p>Times Worn:
<input type="text" name="worn"></p>
<p><input type="submit" value="Add New"/>
<a href="profilepage.php">cancel</a></p>
</form>