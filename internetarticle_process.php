<!-- this page inserts and outputs the concatonated values of the
     internet article reference item to the screen -->
<?php
// including main.php as the main screen that the values will be output to
include("main.php");
//variables
$internetarticleSurname = $_REQUEST["txtSurname"];
$internetarticleInitials = $_REQUEST["txtInitials"];
$internetarticleYearPublished = $_REQUEST["txtYear"];
$internetarticleArticleTitle = $_REQUEST["txtarticle"];
$internetarticleUrl = $_REQUEST["txturl"];
$internetarticleDateAccessed = $_REQUEST['txtAccessed'];


//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert and output the concatonated values
// that the user has input
$result = $db->query("INSERT INTO tbl_internetarticle (internetarticle_surname, internetarticle_initials, internetarticle_yearpublished, internetarticle_articletitle, internetarticle_url, internetarticle_dateaccessed) VALUES ('$internetarticleSurname', '$internetarticleInitials', '$internetarticleYearPublished', '$internetarticleArticleTitle', '$internetarticleUrl', '$internetarticleDateAccessed')");

//checking if the query ran successfully and outputting the concatonated values
if($result)
{
  echo "$internetarticleSurname" . "," . "$internetarticleInitials" . "." . "$internetarticleYearPublished"
  . "." . "$internetarticleArticleTitle" . "." . "$internetarticleUrl" . "." . "Date Accessed:" . "$internetarticleDateAccessed";
}
// else if the query does not run successfully, print "Error" to the screen and the database error
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
