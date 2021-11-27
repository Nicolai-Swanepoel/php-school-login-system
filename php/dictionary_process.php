<!-- this is the insert statement that outputs a dictionary reference -->
<?php
include("main.php");
//variables listed
$dictionaryTitle = $_REQUEST["txtTitle"];
$dictionaryYear = $_REQUEST["txtYear"];
$dictionaryLocation = $_REQUEST["txtplacepublished"];
$dictionaryPublisher = $_REQUEST["txtPublishername"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that inserts values and outputs them to the screen
$result = $db->query("INSERT INTO tbl_dictionary (dictionary_title, dictionary_year, dictionary_location, dictionary_publisher) VALUES ('$dictionaryTitle', '$dictionaryYear', '$dictionaryLocation', '$dictionaryPublisher')");

//checking if the query ran successfully and concatonating the values in the correct format
if($result)
{
  echo "$dictionaryTitle" . "," . "$dictionaryYear" . "," . "$dictionaryLocation" . ":" .  "$dictionaryPublisher";
}
//if the query does not run successfully, print "Error" to the screen and display the database error
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
