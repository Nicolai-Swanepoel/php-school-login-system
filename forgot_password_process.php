<!-- this php processing page allows the user to update their password in the event
that they may have forgotten it -->
<?php
$user_password = $_REQUEST["txtpassword"];

// connecting to the database(host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

// checking for database connection errors
if(mysqli_connect_errno())
{
    echo "Error Connecting To Database";
    exit;
}

// building the query
$result = $db->query("UPDATE tbl_user SET user_password = '$user_password'");

// checking if the query ran successfully and redirecting the user to the login page
// if the query runs successfully
if($result)
{
   header("location: login.php");
}
// else if the query does not run successfully, print "Error" to the screen and the database error
else
{
    echo "Error" . $db->error;
}

// Closing the database conneciton
$db->close();
 ?>
