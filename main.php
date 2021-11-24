<!-- this is the main page, where users can input their reference
     values and have it printed to the screen in the correct format -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link href="jquery-ui.css" rel="stylesheet">
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
     <!-- welcomes the user to the application -->
     <?php
     $welcome = array("welcome");
     echo "</br> " . $welcome[0] . " To " . "The PA referencing app"
     ?>
    <style media="screen">
      html
      {
        background: url(images/pabackground3.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      .header
      {
        font-family: roboto;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
      }


      .division
      {
        width: 80%;
        margin: 0 auto;
      }

      nav
      {
        font-family: Arial, Helvetica, sans-serif;
        width: 100vw;
        height: 90px;
        box-shadow: 0px 0px 10px rgb(148, 149, 149);
        display: inline-block;
        background-color: #87CEEB;
        color: inherit;
        text-align: center;
      }
      nav ul,li,a
      {
        display: inline-block;
        margin-top: 2px;
        padding: 10px;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
      }
      .tabs
      {
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #55accf;
        color: black;
      }
      *
      {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

    </style>
  </head>
  <body>
      <!-- Navigation here -->
    <nav>
      <div class="division">
      <ul>
        <li><a href="change_profile.php" style="color: red;">Change Profile</a></li>
        <li><a href="logout_process.php" style="color: red;">Logout</a></li>
      </ul>
      </div>
    </nav>
    <br /><br />

    <!--header-->
    <div class="header">
      <h1>Choose a reference item</h1>
      </br>
      <p style="font-family: Arial, Helvetica, sans-serif;
      color: black;">Fill in the details and click generate</p>
    </div>
    <br/>
    <div class="wrapper">
      <!-- some jquery tabs -->
      <div id="tabs">
      	<ul>
      		<li><a href="#tabs-1" class="tabs">BOOK</a></li>
      		<li><a href="#tabs-2" class="tabs">DICTIONARY</a></li>
      		<li><a href="#tabs-3" class="tabs">ELECTRONIC DICTIONARY</a></li>
          <li><a href="#tabs-4" class="tabs">JOURNAL ARTICLE</a></li>
          <li><a href="#tabs-5" class="tabs">NEWSPAPER ARTICLE</a></li>
          <li><a href="#tabs-6" class="tabs">ELECTRONIC NEWSPAPER ARTICLE</a></li>
          <li><a href="#tabs-7" class="tabs">INTERNET ARTICLE</a></li>
          <li><a href="#tabs-8" class="tabs">ELECTRONIC NEWSLETTER</a></li>
          <li><a href="#tabs-9" class="tabs">PERSONAL CORRESPONDANCE</a></li>
          <li><a href="#tabs-10" class="tabs">MOVIE</a></li>
      	</ul>
      	<div id="tabs-1"><form class="" style ="text-align: center; background-color: #87CEEB;" action="book_process.php">
          <h1>Book </h1><br/>
          <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
          <input type="text" name="txtInitials" value="" placeholder="Author Initials"><br/>
          <input type="text" name="txtDate" value="" placeholder="Date Read"><br/>
          <input type="text" name="txtTitle" value="" placeholder="Title Of Book"><br/>
          <input type="text" name="txtEdition" value="" placeholder="Book Edition"><br/>
          <input type="text" name="txtLocation" value="" placeholder="Publisher Location"><br/>
          <input type="text" name="txtPublisher" value="" placeholder="Publisher Name"><br/>
          <br/>
          <input type="submit" name="" style="color: red;" value="Generate">
        </form></div>
        <div id="tabs-2"><form class="" style ="text-align: center; background-color: #87CEEB;" action="dictionary_process.php" method="post">
          <h1>Dictionary</h1><br/>
          <input type="text" name="txtTitle" value="" placeholder="Title of Disctionary"><br/>
          <input type="text" name="txtYear" value="" placeholder="Year published"><br/>
          <input type="text" name="txtplacepublished" value="" placeholder="Place published"><br/>
          <input type="text" name="txtPublishername" value="" placeholder="publisher name"><br/>
          <br/>
          <input type="submit" name="" style="color: red;" value="Generate">
        </form></div>
        <div id="tabs-3"><form class="" style ="text-align: center; background-color: #87CEEB;" action="edictionary_process.php" method="post">
          <h1>Electronic dictionary</h1><br/>
          <input type="text" name="txtTitle" value="" placeholder="Title Of Website"><br/>
          <input type="text" name="txtCopyDate" value="" placeholder="Copyright Date"><br/>
          <input type="text" name="txtWord" value="" placeholder="Word Researched"><br/>
          <input type="text" name="txturl" value="" placeholder="Website Url"><br/>
          <input type="text" name="txtDate" value="" placeholder="Date accessed"><br/>
          <br/>
          <input type="submit" name="" style="color: red;" value="Generate">
        </form></div>
        <div id="tabs-4"><form class="" style ="text-align: center; background-color: #87CEEB;" action="journalarticle_process.php" method="post">
            <h1>Journal article</h1><br/>
            <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
            <input type="text" name="txtInitials" value="" placeholder="Author Initials"><br/>
            <input type="text" name="txtYear" value="" placeholder="Year published"><br/>
            <input type="text" name="txtArticleTitle" value="" placeholder="Article Title"><br/>
            <input type="text" name="txtJournalTitle" value="" placeholder="Journal title"><br/>
            <input type="text" name="txtVolume" value="" placeholder="Journal volume"><br/>
            <input type="text" name="txtPagenum" value="" placeholder="Journal page number"><br/>
            <br/>
            <input type="submit" name="" style="color: red;" value="Generate">
          </form>
        </div>
        <div id="tabs-5"><form class="" style ="text-align: center; background-color: #87CEEB;" action="newspaperarticle_process.php" method="post">
            <h1>Newspaper article</h1><br/>
            <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
            <input type="text" name="txtInitials" value="" placeholder=" Author Initials"><br/>
            <input type="text" name="txtYear" value="" placeholder="Year published"><br/>
            <input type="text" name="txtPublication" value="" placeholder="Publication title"><br/>
            <input type="text" name="txtNewsarticle" value="" placeholder="Newspaper article title"><br/>
            <input type="text" name="txtNewstitle" value="" placeholder="Newspaper title"><br/>
            <input type="text" name="txtArticlepage" value="" placeholder="Article page number"><br/>
            <input type="text" name="txtDate" value="" placeholder="Article Date">
            <br/>
            <input type="submit" name="" style="color: red;" value="Generate">
          </form></div>
        <div id="tabs-6"><form class="" style ="text-align: center; background-color: #87CEEB;" action="enewspaperarticle_process.php" method="post">
              <h1> Electronic newspaper article</h1>
              <br/>
              <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
              <input type="text" name="txtInitials" value="" placeholder="Author Initials"><br/>
              <input type="text" name="txtYear" value="" placeholder="Year published"><br/>
              <input type="text" name="txtNewsarticle" value="" placeholder="Newspaper Article Title"><br/>
              <input type="text" name="txtNewstitle" value="" placeholder="Newspaper Article Title"><br/>
              <input type="text" name="txtDate" value="" placeholder="Newspaper Date"><br/>
              <input type="text" name="txturl" value="" placeholder="Website Url"><br/>
              <input type="text" name="txtAccessed" value="" placeholder="Date accessed"><br/>
              <br/>
              <input type="submit" name="" style="color: red;" value="Generate">
            </form></div>
        <div id="tabs-7"><form class="" style ="text-align: center; background-color: #87CEEB;"action="internetarticle_process.php" method="post">
                <h1> Internet article</h1>
                <br/>
                <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
                <input type="text" name="txtInitials" value="" placeholder=" Author Initials"><br/>
                <input type="text" name="txtYear" value="" placeholder="Year published"><br/>
                <input type="text" name="txtarticle" value="" placeholder="Internet article title"><br/>
                <input type="text" name="txturl" value="" placeholder="Website Url"><br/>
                <input type="text" name="txtAccessed" value="" placeholder="Date accessed"><br/>
                <br/>
                <input type="submit" name="" style="color: red;" value="Generate">
              </form></div>
        <div id="tabs-8"><form class="" style ="text-align: center; background-color: #87CEEB;"action="enewsletter_process.php" method="post">
                  <h1> Electronic Newsletter</h1><br/>
                  <input type="text" name="txtSurname" value="" placeholder="Author Surname"><br/>
                  <input type="text" name="txtInitials" value="" placeholder="Author Initials"><br/>
                  <input type="text" name="txtYear" value="" placeholder="Year Published"><br/>
                  <input type="text" name="txtNewslettertitle" value="" placeholder="Newsletter title"><br/>
                  <input type="text" name="txturl" value="" placeholder="website url"><br/>
                  <input type="text" name="txtAccessed" value="" placeholder="Date accessed"><br/>
                  <br/>
                  <input type="submit" name="" style="color: red;" value="Generate">
                </form></div>
        <div id="tabs-9"><form style ="text-align: center; background-color: #87CEEB;"class=""action="personalcorrespondance_process.php"method="post">
                    <h1>Personal Correspondance</h1><br/>
                    <input type="text" name="txtSurname" value="" placeholder="Surname"><br/>
                    <input type="text" name="txtInitials" value="" placeholder="Initials"><br/>
                    <input type="text" name="txtYear" value="" placeholder="Date Of Correspondance"><br/>
                    <input type="text" name="txtTopic" value="" placeholder="Topic Of Correspondance"><br/>
                    <input type="text" name="txtType" value="" placeholder="Type (Email, Phone)"><br/>
                    <input type="text" name="txtDate" value="" placeholder="Day and Month"><br/>
                    <input type="text" name="txtPlace" value="" placeholder="Place"><br/>
                    <br/>
                    <input type="submit" name="" style="color: red;" value="Generate">
                  </form></div>
        <div id="tabs-10"><form class="" style ="text-align: center; background-color: #87CEEB;" action="movie_process.php" method="post">
                      <h1>Movie</h1><br/>
                      <input type="text" name="txtTitle" value="" placeholder="Movie Title"><br/>
                      <input type="text" name="txtYear" value="" placeholder="Year Released"><br/>
                      <input type="text" name="txtDirector" value="" placeholder="Director Title"><br/>
                      </br>
                      <input type="submit" name="" style="color: red;" value="Generate">
                    </form></div>
      </div>
      </div>
      <div class="wrapper">
      <div class="output">
        <div class="inner">
          <h1></h1>
        </div>
      </div>
      </div>
      <!-- jquery scripts -->
      <script src="jquery.js"></script>
      <script src="jquery-ui.js"></script>
      <!-- some jquery -->
      <script type="text/javascript">
      $( "#tabs" ).tabs();

      </script>
    </br>
  </br>
</br>
  </body>
</html>
