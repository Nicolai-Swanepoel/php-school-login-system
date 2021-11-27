<!-- this page starts a new user session once the user puts in the correct
login details in the login form -->
<?php
session_start(); //starts the session
$email = $_REQUEST['txtemail'];
$pass = $_REQUEST['txtpassword'];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost","admin","admin","db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
	echo "Error Connecting To Database";
	exit;
}

//building the query that will select and verify the details the user input in
//the login form
$result = $db->query("SELECT user_id, user_email, user_password FROM tbl_user WHERE user_email = '$email'  AND user_password = '$pass'");

//retrieving the numbr of rows from the db
$row_count = $result->num_rows;

//checking if the query ran successfully
if($row_count > 0)
{
	//running through the result and determining if the user's information matches with the database
	for($i = 0; $i < $row_count; $i++)
	{
		$row = $result-> fetch_assoc();
		$_SESSION['id'] = $row['user_id'];
		$_SESSION['email'] = $row['user_email'];
		header("Location: main.php"); //redirects to the main page
		exit();
	}
}
// if the user's account is not found, display a message to the user
else
{
  echo "Account not found, Please go back to the main screen by going back one tab";
}

//closing the database connection
$db->close();
?>
