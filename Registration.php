<!-- this page includes a registration form that
      allows the user to sign-up to the application -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register page</title>
  </head>
  <!-- some styling -->
  <style>
  html
  {
    background: url(images/pabackground2.jpg) no-repeat center center fixed;
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
      <h1 style="text-align: center;">Register Below</h1>
      </br>
      <!-- the registration form -->
      <form class="form" action="php/registration_process.php">
        <input type="text" name="txtfirstname" placeholder="Firstname...">
      </br>
        <input type="text" name="txtlastname" placeholder="lastname...">
      </br>
        <input type="text" name="txtstudent_number" placeholder="student number...">
      </br>
        <input type="text" name="txtemail" placeholder="email...">
      </br>
        <input type="text" name="txtpassword" placeholder="password...">
      </br>
      </br>
        <input type="submit" name="" value="submit">
      </br>
      </br>
      </br>
      <img src="images/prestigelogo.png" style="margin-left: auto; margin-right: auto; width: 50%; height: 50%; alt="">
      </form>
    </div>
  </body>
</html>
