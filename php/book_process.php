<!-- this page inserts and outputs the concatonated values to the screen -->
<?php
include("main.php");
//variables are listed
$bookSurname = $_REQUEST["txtSurname"];
$bookInitials = $_REQUEST["txtInitials"];
$bookDate = $_REQUEST["txtDate"];
$bookTitle = $_REQUEST["txtTitle"];
$bookEdition = $_REQUEST["txtEdition"];
$bookLocation = $_REQUEST["txtLocation"];
$bookPublisher = $_REQUEST["txtPublisher"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert values into the table
$result = $db->query("INSERT INTO tbl_book (book_author, book_initial, book_date, book_title,book_edition, book_location,book_publisher) VALUES ('$bookSurname', '$bookInitials', '$bookDate', '$bookTitle', '$bookEdition', '$bookLocation', '$bookPublisher')");

//checking if the query ran successfully, and concatonating the output
if($result)
{
  echo "$bookSurname" . "," . "$bookInitials" . "," . "$bookDate" . "," . "$bookTitle" . "," . "$bookEdition" . "," . "$bookLocation" . ":" . "$bookPublisher";
}
//if there is an error, echo error and display the error on the screen for debugging
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
