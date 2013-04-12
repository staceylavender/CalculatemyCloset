<!--This page will be for users to add items to their database-->
<!--This page will feature select lists of items from organize2.php-->
<?php include('header.php');?> 
<?php session_start();
include 'functions.php';
ECHO ("TEST"); 
print_r($_POST);

if ( isset($_POST['type']) && isset($_POST['color'])  && isset($_POST['pattern'])  && isset($_POST['size']) && isset($_POST['fit']) 
     && isset($_POST['price'])) {

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
		header( 'Location: organize3.php' ) ;
		return;
        }

$sql = "INSERT INTO users (id, type, color, pattern, size, fit, price) 
              VALUES ('$id', '$type', '$color', '$pattern', '$size', '$fit', '$price')";

?>

	<h2 style="font-family:Futura; color:coral">Build Your Database!</h2>
	<h3 style="font-family:Futura; color:coral">Enter Your Items Here</h3>
	<br>
	<form>
	<p>Item <input type="text" name="item" value=""/></p>

	<style type="text/css">
    #enter{
        background-color:coral;
    }

    </style>

	<select name="type">
		<option value="Type">Type</option>
		<option value="Jeans">Jeans</option>
        <option value="Pants">Pants</option>
        <option value="Shorts">Shorts</option>
        <option value="Skirt">Skirt</option>
        <option value="Dress">Dress</option>
        <option value="Tshirt">Tshirt</option>
        <option value="Shirt">Shirt</option>
        <option value="Blouse">Blouse</option>
        <option value="Coat">Coat</option>
        <option value="Jacket">Jacket</option>
        <option value="Athletic Top">Athletic Top</option>
        <option value="Athletic Bottom">Athletic Bottom</option>
	</select>

	<select name="color">
		<option value="Color">Color</option>
        <option value="White">White</option>
        <option value="Black">Black</option>
        <option value="Gray">Gray</option>
        <option value="Red">Red</option>
        <option value="Orange">Orange</option>
        <option value="Yellow">Yellow</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Purple">Purple</option>
        <option value="Brown">Brown</option>
        <option value="Peach">Peach</option>
        <option value="Mint">Mint</option>
        <option value="Magenta">Magenta</option>
        <option value="Off-White">Off-White</option>
	</select>

	<select name="pattern">
		<option value="Pattern">Pattern</option>
        <option value="Multi">Multi</option>
        <option value="Dots">Dots</option>
        <option value="Paisley">Paisley</option>
        <option value="Argyle">Argyle</option>
        <option value="Checkered">Checkered</option>
        <option value="Floral">Floral</option>
        <option value="Brocade">Brocade</option>
        <option value="Houndstooth">Houndstooth</option>
        <option value="Tartan">Tartan</option>
        <option value="Chevron/ZigZag">Chevron/ZigZag</option>
        <option value="Toile">Toile</option>
        <option value="Tie-Dye">Tie-Dye</option>
	</select>

	<select name="size">
		<option value="Size">Size</option>
		<option value="XXS">XXS</option>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        <option value="00">00</option>
        <option value="0">0</option>
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="16">16</option>
        <option value="18">18</option>
        <option value="20">20</option>
        <option value="22">22</option>
        <option value="24">24</option>
	</select>

	<select name="fit">
		<option value="Fit">Fit</option>
		<option value="Regular">Regular</option>
            <option value="Bootcut">Bootcut</option>
            <option value="Skinny">Skinny</option>
            <option value="Low-rise">Low-rise</option>
            <option value="Flare">Flare</option>
            <option value="Baggy">Baggy</option>
            <option value="Fitted">Fitted</option>
            <option value="Shift">Shift</option>
	</select>

	<select name="price">
		<option value="Price">Price</option>
        <option value="$10 or less">$10 or less</option>
        <option value="$11-$15">$11-$15</option>
        <option value="$16-$20">$16-$20</option>
        <option value="$21-$30">$21-$30</option>
        <option value="$31-$40">$31-$40</option>
        <option value="$41-$50">$41-$50</option>
        <option value="$51-$60">$51-$60</option>
        <option value="$61-$70">$61-$70</option>
        <option value="$71-$80">$71-$80</option>
        <option value="$81-$100">$81-$100</option>
        <option value="$100-$150">$100-$150</option>
        <option value="$150-$200">$150-$200</option>
	</select>

	<select name="rating">
		<option value="Rating">Rating</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
	</select>

</form>

<?php
echo '<table border="1">'."\n";
$result = mysql_query("SELECT id, type, color, pattern, size, fit, price FROM users");
while ( $row = mysql_fetch_row($result) ) {
    echo "<tr><td>";
    echo(htmlentities($row[1]));
    echo("</td><td>");
    echo(htmlentities($row[2]));
    echo("</td><td>");
    echo(htmlentities($row[3]));
    echo("</td><td>\n");
	echo(htmlentities($row[4]));
    echo("</td><td>\n");
	echo(htmlentities($row[5]));
    echo("</td><td>\n");
	echo(htmlentities($row[6]));
    echo("</td><td>\n");
    echo('<a href="edit.php?id='.htmlentities($row[0]).'">Edit</a> / ');
    echo('<a href="delete.php?id='.htmlentities($row[0]).'">Delete</a>');
    echo("</td></tr>\n");
}
?>

	<div>
        <br>
        <input id="enter" type="button" value="Enter into Database!" onclick="location.href='visualization.php'; return false">
    </div>