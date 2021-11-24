<!-- this is the html form that allows the user to change their details -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>change Profile</title>
  </head>
  <!-- some styling -->
  <style>
  html
  {
    background: url(images/pabackground3.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  .form
  {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    background-color: white;
    box-shadow: 0px 0px 10px rgb(54, 54, 54);
    width: 300px;
    height: 300px;
    padding: 30px;
    font-family: Arial, Helvetica, sans-serif;
  }
  </style>
  <body>
    <!-- creating a form in a container -->
    <div class="container">
      <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif; ">Change Your Login Details Below</h1>
      </br>
      <form class="form" action="change_profile_process.php">
        <input type="text" name="txtemail" placeholder="New Email">
        </br>
        </br>
        <input type="text" name="txtpassword" placeholder="New Password">
        </br>
        </br>
        </br>
        <input type="submit" style="color: red;" name="" value="Change Profile">
        </br>
        </br>
        </br>
        <img src="images/prestigelogo.png" style="margin-left: auto; margin-right: auto; width: 50%; height: 50%; alt="">
      </form>
    </form>
  </body>
</html>
