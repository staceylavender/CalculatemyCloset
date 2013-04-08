<!--This page will be for users to add items to their database-->
<!--This page will feature select lists of items from organize2.php-->
<?php include('header.php');?> 
<?php session_start();
require_once "login.php"; //connect to database

if ( isset($_POST['type']) ) {
$id = mysql_real_escape_string($_POST['id']);
$name = mysql_real_escape_string($_POST['name']);
$type = mysql_real_escape_string($_POST['type']);
$color = mysql_real_escape_string($_POST['color']);
$pattern = mysql_real_escape_string($_POST['pattern']);
$size = mysql_real_escape_string($_POST['size']);
$fit = mysql_real_escape_string($_POST['fit']);
$price = mysql_real_escape_string($_POST['price']);
$worn = mysql_real_escape_string($_POST['worn']);

$tablename= $_SESSION['tablename'];  //call tablename from session
$sql = "INSERT INTO $tablename (id, name, type, color, pattern, size, fit, price, worn) 
              VALUES ('$id', '$name', '$type', '$color', '$pattern', '$size', '$fit', '$price', '$worn')"; 
   mysql_query($sql);
   header("location: organize3.php");
   return;
}

?>

	<h2 style="font-family:Futura; color:coral">Build Your Database!</h2>
	<h3 style="font-family:Futura; color:coral">Enter Your Items Here</h3>
	<br>
	<style type="text/css">
    #enter{
        background-color:coral;
    }

    </style>
<form method="post">
	<p>Item Name <input type="text" name="name" value=""/></p>

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
        <option value="Athletic">Athletic</option>
	</select>

	<select name="color">
		<option value="Color">Color</option>
        <option value="White">White</option>
        <option value="Off-White">Off-White</option>
        <option value="Black">Black</option>
        <option value="Gray">Gray</option>
        <option value="Red">Red</option>
        <option value="Orange">Orange</option>
        <option value="Yellow">Yellow</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Purple">Purple</option>
        <option value="Brown">Brown</option>
        <option value="Multi">Multi</option>
	</select>

	<select name="pattern">
		<option value="Pattern">Pattern</option>
        <option value="Dots">Polka dots</option>
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
         <option value="Other">Other</option>
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
            <option value="Fitted">Fitted</option>
            <option value="Loose">Loose</option>
            <option value="Long">Long</option>
            <option value="Short">Short</option>
            <option value="Low Cut">Low Cut</option>
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
        <option value="More">More than $200</option>
	</select>

	<select name="rating">
		<option value="Rating">Rating</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
	</select>

	<select name="worn">
		<option value="Worn">Worn today</option>
		<option value="Unworn">Not worn</option>
	</select>

	<p><input type="submit" value="Add New"/></p>


</form>

<?php
echo '<table border="1">'."\n";
$tablename= $_SESSION['tablename']; //call tablename from session
$result = mysql_query("SELECT id, name, type, color, pattern, size, fit, price, worn FROM $tablename");
while ( $row = mysql_fetch_row($result) ) {
    echo "<tr><td>";
    echo(htmlentities($row[0]));
    echo("</td><td>");
    echo(htmlentities($row[1]));
    echo("</td><td>");
    echo(htmlentities($row[2]));
    echo("</td><td>\n");
    echo(htmlentities($row[3]));
    echo("</td><td>\n");
    echo(htmlentities($row[4]));
    echo("</td><td>\n");
    echo(htmlentities($row[5]));
    echo("</td><td>\n");
    echo(htmlentities($row[6]));
    echo("</td><td>\n");
    echo(htmlentities($row[7]));
    echo("</td><td>\n");
    echo(htmlentities($row[8]));
    echo("</td><td>\n");
    echo('<form method="post"><input type="hidden" ');
    echo('name="id" value="'.$row[9].'">'."\n");
    echo('<a href="edittrack.php?id='.htmlentities($row[10]).'">Edit</a> / ');
    echo('<input type="submit" value="Delete" name="delete">');
    echo("\n</form>\n");
    echo("</td></tr>\n");
}

?></table>

	<div>
        <br>
        <input id="enter" type="button" value="Enter into Database!" onclick="location.href='visualization.php'; return false">
    </div>