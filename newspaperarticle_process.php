<!-- this is the processing page that will output the inserted values to the
     screen in the correct format. -->
<?php
include("main.php");
//variables
$newspaperarticleSurname = $_REQUEST["txtSurname"];
$newspaperarticleInitials = $_REQUEST["txtInitials"];
$newspaperarticleYearPublished = $_REQUEST["txtYear"];
$newspaperarticleTitlePublication = $_REQUEST["txtPublication"];
$newspaperarticleNewsArticleTitle = $_REQUEST["txtNewsarticle"];
$newspaperarticleNewsPaperTitle = $_REQUEST["txtNewstitle"];
$newspaperarticleArticlePageNumber = $_REQUEST["txtArticlepage"];
$newspaperarticleDayMonth = $_REQUEST["txtDate"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will output the inserted values to the screen
$result = $db->query("INSERT INTO tbl_newspaperarticle (newspaperarticle_surname, newspaperarticle_initials, newspaperarticle_yearpublished, newspaperarticle_titlepublication, newspaperarticle_newsarticletitle,newspaperarticle_newspapertitle, newspaperarticle_articlepagenum, newspaperarticle_daymonth) VALUES ('$newspaperarticleSurname', '$newspaperarticleInitials', '$newspaperarticleYearPublished', '$newspaperarticleTitlePublication', '$newspaperarticleNewsArticleTitle', '$newspaperarticleNewsPaperTitle' , '$newspaperarticleArticlePageNumber', '$newspaperarticleDayMonth')");

//checking if the query ran successfully and outputting the correct formatted values
if($result)
{
  echo "$newspaperarticleSurname" . "," . "$newspaperarticleInitials" . "." . "$newspaperarticleYearPublished"
  . "." . "$newspaperarticleNewsArticleTitle" . "," . "$newspaperarticleNewsPaperTitle" . "." . "$newspaperarticleArticlePageNumber" . "," . "$newspaperarticleDayMonth";
}
// else if the query does not run successfully, print "Error" to the screen
// and display the database error for debugging
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
