<!-- This is the form that allows the user to create a new session
      and login to the application -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <!-- welcoming the user -->
    <?php
    $hello = array("User");
    echo "Hello " . $hello[0] . ", " . "The date is:"
    ?>
    <!-- displays the date -->
    <?php
    date_default_timezone_set('Africa/Johannesburg');
    echo date('Y-m-d H:i:s', time());
     ?>
     <!-- Introduces the user to the application -->
     <?php
     $welcome = array("welcome");
     echo "</br> " . $welcome[0] . " To " . "The PA referencing app"
     ?>
  </head>
  <!-- some styling -->
  <style media="screen">
    html
    {
      background: url(images/pabackground.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .centertext
    {
      padding-top: 70px;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
    }

    .formcenter
    {
      margin-top: 100px;
      margin-left: 25px;
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
      <!-- the form that allows the user to login to the application -->
      <div class="centertext">
        <h1>Prestige Academy Referencing Application<br/></h1>
        <h2>Please Sign Up or Login below </h2>
      </div>
      <div class="formcenter">
        <div class="form">
      <form class="myForm" action="login_process.php" onsubmit="return validate();">
        <h1 style="font-family: Arial, Helvetica, sans-serif;">Login</h1>
        <input type="text" name="txtemail" placeholder="Email..."><br/>
        <input type="text" name="txtpassword" placeholder="Password..."><br/>
        </br>
        </br>
        <input type="submit" name="" value="Login">
        <a href="forgot_password.php">Forgot Password?</a>
      </br>
      </br>
      </br>
      </br>
      <a href="registration.php" style="color: red;">Sign Up Here</a>
      </form>
    </br>
  </br>
</br>
    <img src="images/prestigelogo.png" style="margin-left: auto; margin-right: auto; width: 50%; height: 50%; padding-top: 70px;alt="">
      </div>
        </div>
    </div>
  </body>
</html>
