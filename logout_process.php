<!-- This piece of code logs the user out of the application and terminates the session -->
<?php
    // session is started
    session_start();
    // the session values are unset
    unset($_SESSION['userID']);
    unset($_SESSION['firstname']);
    // the session is closed
    session_destroy();
    // the user is redirected to the login screen
    header('Location: login.php');
	exit;
?>
