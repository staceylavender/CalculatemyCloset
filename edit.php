<?php
require_once "login.php";
session_start();

if ( isset ($_POST['id']) && isset($_POST['type']) && isset($_POST['color']) && isset($_POST['pattern']) && isset($_POST['size']) && isset($_POST['fit']) 
		&& isset($_POST['price'])) {
		$id = mysql_real_escape_string($_POST['id']);
		$type = mysql_real_escape_string($_POST['type']);
		$color = mysql_real_escape_string($_POST['color']);
		$pattern = mysql_real_escape_string($_POST['pattern']);
		$size = mysql_real_escape_string($_POST['size']);
		$fit = mysql_real_escape_string($_POST['fit']);
		$price = mysql_real_escape_string($_POST['price']);
		
		$sql = "UPDATE jeffwarner SET type='$type', color='$color', 
		pattern='$pattern', size='$size', fit='$fit', price='$price' WHERE id='$id'"; 
		mysql_query($sql);
		$_SESSION['success'] = 'Record updated';
		header( 'Location: profilepage.php' ) ;
		return;
		}
		


$id = mysql_real_escape_string($_GET['id']);
$result = mysql_query("SELECT id, type, color, pattern, size, fit, price
    FROM jeffwarner WHERE id='$id'");
$row = mysql_fetch_row($result);
if ( $row == FALSE ) {
    $_SESSION['error'] = 'Bad value for id';
    header( 'Location: profilepage.php' ) ;
    return;
}

$id = htmlentities($row[0]);
$type = htmlentities($row[1]);
$color = htmlentities($row[2]);
$pattern = htmlentities($row[3]);
$size = htmlentities($row[4]);
$fit = htmlentities($row[5]);
$price = htmlentities($row[6]);

echo <<< _END
<p>Edit Item</p>
<form method="post">
<input type="hidden" name="id" value="$id">
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
<p><input type="submit" value="Update"/>
<a href="profilepage.php">Cancel</a></p>
</form>
_END
?>




