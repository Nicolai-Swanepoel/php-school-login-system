<!-- this process allows a user to add their details to the Database
      and store it so that they can create a new session to login -->
<?php

//variables listed
$userName = $_REQUEST["txtfirstname"];
$userLastname = $_REQUEST["txtlastname"];
$userStudentnum = $_REQUEST["txtstudent_number"];
$userEmail = $_REQUEST["txtemail"];
$userPassword = $_REQUEST["txtpassword"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert the new user details to the database
$result = $db->query("INSERT INTO tbl_user (user_firstname, user_lastname, user_studentnum, user_email, user_password) VALUES ('$userName', '$userLastname', '$userStudentnum', '$userEmail', '$userPassword')");

//checking if the query ran successfully and redirecting the user to the login screen
if($result)
{
  header("location: login.php");
}
//else if the query does not run successfully, print "Error" to the screen
// and display the database error for debugging purposes
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
