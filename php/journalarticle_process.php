<!-- this processing page inputs and then displays the concatonated
values of the journal article reference item to the screen -->
<?php
include("main.php");
//variables
$journalarticleSurname = $_REQUEST["txtSurname"];
$journalarticleInitials = $_REQUEST["txtInitials"];
$journalarticleYearPublished = $_REQUEST["txtYear"];
$journalarticleArticleTitle = $_REQUEST["txtArticleTitle"];
$journalarticleJournalTitle = $_REQUEST["txtJournalTitle"];
$journalarticleVolume = $_REQUEST["txtVolume"];
$journalarticleNumPages = $_REQUEST["txtPagenum"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will display the concatonated values to the user
$result = $db->query("INSERT INTO tbl_journalarticle (journalarticle_surname, journalarticle_initials, journalarticle_yearpublished, journalarticle_articletitle, journalarticle_journaltitle, journalarticle_volume, journalarticle_numpages) VALUES ('$journalarticleSurname', '$journalarticleInitials', '$journalarticleYearPublished', '$journalarticleArticleTitle', '$journalarticleJournalTitle', '$journalarticleVolume', '$journalarticleNumPages')");

//checking if the query ran successfully and outputing the concatonated
// values that the user input to the form
if($result)
{
  echo "$journalarticleSurname" . "," . "$journalarticleInitials" . "." .  "$journalarticleYearPublished"
  . "." . "$journalarticleArticleTitle" . "." . "$journalarticleJournalTitle" . "," .
  "$journalarticleVolume" . ":" . "$journalarticleNumPages";
}
// else if the query does not run successfully, print "Error" to the screen and the database error
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
