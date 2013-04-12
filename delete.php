<?php
session_start();
include 'functions.php';

$tableemail = $_SESSION['email'];
$tablename = $tableemail.'table';

if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $id = mysql_real_escape_string($_POST['id']);
    $sql = "DELETE FROM $tablename WHERE id = $id";
    mysql_query($sql);
    $_SESSION['success'] = 'Record deleted';
    header( 'Location: profilepage.php' ) ;
    return;
}

$id = mysql_real_escape_string($_GET['id']);
$result = mysql_query("SELECT id, type FROM $tablename WHERE id='$id'");
$row = mysql_fetch_row($result);
if ( $row == FALSE ) {
    $_SESSION['error'] = 'Bad value for id';
    header( 'Location: profilepage.php' ) ;
    return;
}

echo "<p>Confirm: Deleting $row[1]</p>\n";

echo('<form method="post"><input type="hidden" ');
echo('name="id" value="'.$row[0].'">'."\n");
echo('<input type="submit" value="Delete" name="delete">');
echo('<a href="profilepage.php">Cancel</a>');
echo("\n</form>\n");
?>