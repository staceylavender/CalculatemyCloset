<?php // Example 21-7: login.php
session_start();
echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>";
include 'functions.php';

echo "<div class='main'><h3>Please enter your details to log in</h3>";
$error = $email = $password = "";

if (isset($_POST['email']))
{
    $email = sanitizeString($_POST['email']);
    $password = sanitizeString($_POST['password']);
    
    if ($email == "" || $password == "")
    {
        $error = "Not all fields were entered<br />";
    }
    else
    {
        $query = "SELECT email, password FROM users
            WHERE email='$email' AND password='$password'";

        if (mysql_num_rows(queryMysql($query)) == 0)
        {
            $error = "<span class='error'>Email/Password
                      invalid</span><br /><br />";
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            die("You are now logged in. Please <a href='profilepage.php?view=$email'>" .
                "click here</a> to continue.<br /><br />");
        }
    }
}

echo <<<_END
<form method='post' action='newlogin.php'>$error
<span class='fieldname'>Email Address</span><input type='text'
    maxlength='16' name='email' value='$email' /><br />
<span class='fieldname'>Password</span><input type='password'
    maxlength='16' name='password' value='$password' />
_END;
?>

<br />
<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Login' />
</form><br /></div></body></html>
