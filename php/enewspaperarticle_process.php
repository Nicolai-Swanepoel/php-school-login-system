<!-- this insert statement will insert and output values from the enewsletter table
<?php
include("main.php");
//variables listed
$enewspaperarticleSurname = $_REQUEST["txtSurname"];
$enewspaperarticleInitials = $_REQUEST["txtInitials"];
$enewspaperarticleYearPublished = $_REQUEST["txtYear"];
$enewspaperarticleTitle = $_REQUEST["txtNewsarticle"];
$enewspaperTitle = $_REQUEST["txtNewstitle"];
$enewspaperarticleDayMonth = $_REQUEST['txtDate'];
$enewspaperarticleUrl = $_REQUEST['txturl'];
$enewspaperarticleDateAccessed = $_REQUEST['txtAccessed'];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert and output the values that the user inputs to the screen
$result = $db->query("INSERT INTO tbl_enewspaperarticle (enewspaperarticle_surname, enewspaperarticle_initials, enewspaperarticle_yearpublished, enewspaperarticle_enewsarticletitle, enewspaperarticle_enewspapertitle, enewspaperarticle_daymonth, enewspaperarticle_url, enewspaperarticle_dateaccessed) VALUES ('$enewspaperarticleSurname', '$enewspaperarticleInitials', '$enewspaperarticleYearPublished', '$enewspaperarticleTitle', '$enewspaperarticleTitle', '$enewspaperarticleDayMonth', '$enewspaperarticleUrl', '$enewspaperarticleDateAccessed')");

//checking if the query ran successfully and concatonating the values in the correct format
if($result)
{
  echo "$enewspaperarticleSurname" . "," . "$enewspaperarticleInitials" . "." . "$enewspaperarticleYearPublished" . "." . "$enewspaperarticleTitle" . "." . "$enewspaperTitle" . "." . "$enewspaperarticleDayMonth" . "."
  . "$enewspaperarticleUrl" . "," . "Date Accessed:" . "." . "$enewspaperarticleDateAccessed";
}
// else if the query does not run successfully, print "Error" to the screen and the database error 
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
