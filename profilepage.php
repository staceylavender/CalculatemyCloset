<head>
   <title>Calculate My Closet</title>
<head>
<body>
	   <h1 style="font-family:Futura; color:coral">Calculate My Closet</h1>
       <h2 style="font-family:Futura; color:coral">Stacey's Closet</h2>
       <p></p>
<?php
require_once "login.php";
session_start();
if ( isset($_SESSION['error'] )) {
echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
unset($_SESSION['error']);
}
if ( isset($_SESSION['success'] )) {
echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
unset($_SESSION['success']);
}
echo '<table border="1">'."\n";
$result = mysql_query("SELECT * FROM jeffwarner");
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
</table>

       <a href="add.php" style="font-family:Futura">Add New</a>
</body>