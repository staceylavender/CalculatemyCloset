<head>
   <title>Calculate My Closet</title>
<head>
<body>
	   <h1 style="font-family:Futura; color:coral">Calculate My Closet</h1>
       <h2 style="font-family:Futura; color:coral">Your Closet</h2>
       <p></p>
<?php
session_start();
include 'functions.php';

if ( isset($_SESSION['error'] )) {
echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
unset($_SESSION['error']);
}
if ( isset($_SESSION['success'] )) {
echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
unset($_SESSION['success']);
}
$tableemail = $_SESSION['email'];
$tablename = $tableemail.'table';

echo '<table border="1">'."\n";
$result = mysql_query("SELECT * FROM $tablename");
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
	echo(htmlentities($row[7]));
    echo("</td><td>\n");
	echo(htmlentities($row[8]));
    echo("</td><td>\n");
    echo('<a href="edit.php?id='.htmlentities($row[0]).'">Edit</a> / ');
    echo('<a href="delete.php?id='.htmlentities($row[0]).'">Delete</a>');
    echo("</td></tr>\n");
}
?>
</table>

       <a href="add.php" style="font-family:Futura">Add New</a>
	   <a href="newlogout.php" style="font-family:Futura">Log out</a>
</body>