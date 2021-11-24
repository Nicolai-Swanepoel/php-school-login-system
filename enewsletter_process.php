<!-- This inserts and outputs the enewsletter reference item values to the screen -->
<?php
include("main.php");
//variables listed
$enewsletterSurname = $_REQUEST["txtSurname"];
$enewsletterInitials = $_REQUEST["txtInitials"];
$enewsletterYearPublished = $_REQUEST["txtYear"];
$enewslettertitle = $_REQUEST["txtNewslettertitle"];
$enewsletterUrl = $_REQUEST['txturl'];
$enewsletterDateAccessed = $_REQUEST["txtAccessed"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert the values and output them to the screen
$result = $db->query("INSERT INTO tbl_enewsletter (enewsletter_surname, enewsletter_initials, enewsletter_yearpublished, enewsletter_enewslettertitle, enewsletter_url, enewsletter_dateaccessed) VALUES ('$enewsletterSurname', '$enewsletterInitials', '$enewsletterYearPublished', '$enewslettertitle', '$enewsletterUrl', $enewsletterDateAccessed)");

//checking if the query ran successfully and concatonating the values to the screen in the correct format
if($result)
{
  echo "$enewsletterSurname" . "," . "$enewsletterInitials" . "." . "$enewsletterYearPublished" . "." .
  "$enewslettertitle" . "." . "$enewsletterUrl" . "." . "Date Accessed:" . "" . "$enewsletterDateAccessed";
}
//else if the query does not run successfully, print "Error" to the screen and print the error message
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
