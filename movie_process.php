<!-- this is the processing page that will output the users
    movie reference to the screen in the correct format -->
<?php
include("main.php");
//variables
$movieTitle = $_REQUEST["txtTitle"];
$movieYearReleased = $_REQUEST["txtYear"];
$movieDirectorTitle = $_REQUEST["txtDirector"];

//connecting to the database (host, username, password, db_name)
$db = new mysqli("localhost", "admin", "admin", "db_ref");

//checking for database connection errors
if(mysqli_connect_errno())
{
  echo "Error connecting to database";
  exit;
}

//building the query that will output the concatonated values
$result = $db->query("INSERT INTO tbl_movie (movie_title, movie_yearreleased, movie_directortitle) VALUES ('$movieTitle', '$movieYearReleased', '$movieDirectorTitle')");

//checking if the query ran successfully and outputting the concatonated correct format
if($result)
{
  echo "(" . "$movieTitle" . "," . "$movieYearReleased" . ")" . "" . "" . "$movieDirectorTitle";
}
//else if the query does not run successfuly, print "Error" to the screen
//and display the database error
else
{
  echo "Error:" . $db->error;
}

// closing the database connection
$db->close();
?>
