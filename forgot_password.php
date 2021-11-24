<!-- this is the form page that allows the user to change a forgotten password -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <div class="container">
      <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif; padding-top: 20px; ">Please type your current email and new password below</h1>
      <form class="form" action="forgot_password_process.php">
        <input type="text" name="txtemail" placeholder="Current Email">
        <br/>
        <input type="text" name="txtpassword" placeholder="New Password">
        <br/>
        <br/>
        <input type="submit" name="" style="color: red;" value="Change Password">
      </br>
      </br>
      </br>
      <img src="images/prestigelogo.png" style="margin-left: auto; margin-right: auto; width: 50%; height: 50%; alt="">
      </form>
    </form>
  </body>
</html>
