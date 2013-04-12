<?php
session_start();
include 'functions.php';

$tableemail = $_SESSION['email'];
$tablename = $tableemail.'table';

if ( isset ($_POST['id']) && isset($_POST['name']) && isset($_POST['type']) && isset($_POST['color']) && isset($_POST['pattern']) 
	&& isset($_POST['size']) && isset($_POST['fit']) && isset($_POST['price']) && isset($_POST['worn']) ) {
		$id = mysql_real_escape_string($_POST['id']);
		$name = mysql_real_escape_string($_POST['name']);
		$type = mysql_real_escape_string($_POST['type']);
		$color = mysql_real_escape_string($_POST['color']);
		$pattern = mysql_real_escape_string($_POST['pattern']);
		$size = mysql_real_escape_string($_POST['size']);
		$fit = mysql_real_escape_string($_POST['fit']);
		$price = mysql_real_escape_string($_POST['price']);
		$worn = mysql_real_escape_string($_POST['worn']);
		$sql = "UPDATE $tablename SET name='$name', type='$type', color='$color', 
		pattern='$pattern', size='$size', fit='$fit', price='$price', worn='$worn' WHERE id=$id";
		
		mysql_query($sql);
		$_SESSION['success'] = 'Record updated';
		header( 'Location: profilepage.php' ) ;
		return;
		}
		


$id = mysql_real_escape_string($_GET['id']);
$result = mysql_query("SELECT id, name, type, color, pattern, size, fit, price, worn
    FROM $tablename WHERE id='$id'");
$row = mysql_fetch_row($result);
if ( $row == FALSE ) {
    $_SESSION['error'] = 'Bad value for id';
    header( 'Location: profilepage.php' ) ;
    return;
}

$id = htmlentities($row[0]);
$name = htmlentities($row[1]);
$type = htmlentities($row[2]);
$color = htmlentities($row[3]);
$pattern = htmlentities($row[4]);
$size = htmlentities($row[5]);
$fit = htmlentities($row[6]);
$price = htmlentities($row[7]);
$worn = htmlentities($row[8]);

echo <<< _END
<p>Edit Item</p>
<form method="post">
<input type="hidden" name="id" value="$id">
<p>Name:
<input type="text" name="name" value="$name"></p>
<p>Type:
<input type="text" name="type" value="$type"></p>
<p>Color:
<input type="text" name="color" value="$color"></p>
<p>Pattern:
<input type="text" name="pattern" value="$pattern"></p>
<p>Size:
<input type="text" name="size" value="$size"></p>
<p>Fit:
<input type="text" name="fit" value="$fit"></p>
<p>Price:
<input type="text" name="price" value="$price"></p>
<p>Times Worn:
<input type="text" name="worn" value="$worn"></p>
<p><input type="submit" value="Update"/>
<a href="profilepage.php">Cancel</a></p>
</form>
_END
?>




