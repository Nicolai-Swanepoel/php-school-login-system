<!-- this page inserts and outputs the edictionary reference item
<?php
include("main.php");
//variables listed
$edictionaryWebTitle = $_REQUEST["txtTitle"];
$edictionaryCopyrightDate = $_REQUEST["txtCopyDate"];
$edicionaryWordResearched = $_REQUEST["txtWord"];
$edictionaryUrl = $_REQUEST["txturl"];
$edictionaryDateaccess = $_REQUEST["txtDate"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will insert and output the values to the screen
$result = $db->query("INSERT INTO tbl_edictionary (edictionary_webtitle, edictionary_copyrightdate, edictionary_wordresearch, edictionary_url, edictionary_dateaccess) VALUES ('$edictionaryWebTitle', '$edictionaryCopyrightDate','$edicionaryWordResearched', '$edictionaryUrl', '$edictionaryDateaccess')");

//checking if the query ran successfully and concatonating the input values to the screen
if($result)
{
  echo "$edictionaryWebTitle" . "," . "$edictionaryCopyrightDate" . "," . "$edicionaryWordResearched" . "," . "$edictionaryUrl" . "," . "Date Accessed:" .  "$edictionaryDateaccess";
}
//else if the query does not run, print "Error" to the screen and show the database error to the screen
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
