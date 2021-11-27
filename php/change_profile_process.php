<!-- this is the process that allows the user to change their profile -->
<?php
// listing variables
$user_email = $_REQUEST["txtemail"];
$user_password = $_REQUEST["txtpassword"];

// connecting to the database(host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

// checking for database connection errors
if(mysqli_connect_errno())
{
    echo "Error Connecting To Database";
    exit;
}

// building the query that will update the user's information in the user table
$result = $db->query("UPDATE tbl_user SET user_email = '$user_email', user_password = '$user_password'");

// checking if the query ran successfully and redirecting the user back to the login page
if($result)
{
   header("location: login.php");
}
// if the query does not run successfully, print "Error" to the screen and display database error on screen
else
{
    echo "Error" . $db->error;
}

// Closing the database conneciton
$db->close();
 ?>
