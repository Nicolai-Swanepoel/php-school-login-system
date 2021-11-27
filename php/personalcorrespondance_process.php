<!-- this processing pages will output the concatonated values
     in the correct format -->
<?php
include("main.php");
//variables
$pcorrespondenceSurname = $_REQUEST["txtSurname"];
$pcorrespondenceInitials = $_REQUEST["txtInitials"];
$pcorrespondenceYearPublished = $_REQUEST["txtYear"];
$pcorrespondenceTopic = $_REQUEST["txtTopic"];
$pcorrespondenceType = $_REQUEST["txtType"];
$pcorrespondenceDate = $_REQUEST["txtDate"];
$pcorrespondenceLocation = $_REQUEST["txtPlace"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will output the inserted values to the screen
$result = $db->query("INSERT INTO tbl_pcorrespondence (pcorrespondence_surname, pcorrespondence_initials, pcorrespondence_yearpublished, pcorrespondence_topic, pcorrespondence_type, pcorrespondence_date, pcorrespondence_location) VALUES ('$pcorrespondenceSurname', '$pcorrespondenceInitials', '$pcorrespondenceYearPublished', '$pcorrespondenceTopic', '$pcorrespondenceType', '$pcorrespondenceDate', '$pcorrespondenceLocation')");

//checking if the query ran successfully and outputting the concatonated values in the correct format
if($result)
{
  echo "$pcorrespondenceSurname" . "," . "$pcorrespondenceInitials" . "$pcorrespondenceYearPublished" .
  "." . "$pcorrespondenceTopic" . "" . "[" . "$pcorrespondenceType" . "]" . "" . "$pcorrespondenceDate" . "," .
  "$pcorrespondenceLocation";
}
// else if there is an error, print "Error" to the screen and display the
// database error to the screen for debugging
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
