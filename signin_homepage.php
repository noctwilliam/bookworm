<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style_1.css">

    <!--source code by Dev Ed from youtube-->
        <head>
            <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/style_1.css">
        </head>

        <nav>
            <div class="logo">
                <h4>The Bookworm</h4>
            </div>
            <ul class="nav-links">
              <li><a href="signin_homepage.php">Home</a></li>
              <li><a href="signin_aboutus.php">About Us</a></li>
              <li><a href = 'logoutpage.php';" id="myButton" class="float-left submit-button" >Log Out</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <script src="main.js"></script>
        <br><br>
        <div class="wrapper">
          <div class="card">
            <img src="image/tokyoueno.jpg" alt="">
            <div class="info">
                <h1>Tokyo Ueono Station</h1>
                <p>A surreal, devastating story of a homeless ghost who haunts one of Tokyo’s busiest train stations.</p>
                <a link rel="stylesheet" href="https://www.penguinrandomhouse.com/books/623504/tokyo-ueno-station-by-yu-miri/" target="_blank" class="btn">Read More</a>
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="card">
            <img src="image/Murakami Colourless.jpg" alt="">
            <div class="info">
                <h1>Colourless</h1>
                <p>One of the most revered voices in literature today gives us a story of love, friend­ship, and heartbreak for the ages</p>
                <a link rel="stylesheet" href="Murakami_Colourless.html" target="_blank" class="btn">Read More</a>
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="card">
            <img src="image/Looking for alaska.jpg" alt="">
            <div class="info">
                <h1>Looking for Alaska</h1>
                <p>First drink. First prank. First friend. First love.Last words.</p>
                <a link rel="stylesheet" href="https://www.penguinrandomhouse.com/books/292717/looking-for-alaska-by-john-green/" target="_blank" class="btn">Read More</a>
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="card">
            <img src="image/Tokyo_Ghoul_volume_1_cover.jpg" alt="">
            <div class="info">
                <h1>Tokyo Ghoul</h1>
                <p>Lurking within the shadows of Tokyo are frightening beings known as "ghouls," who satisfy their hunger by feeding on humans once night falls.</p>
                <a link rel="stylesheet" href="https://myanimelist.net/manga/33327/Tokyo_Ghoul" target="_blank" class="btn">Read More</a>
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="card">
            <img src="image/theselection.jpg" alt="">
            <div class="info">
                <h1>The Selection</h1>
                <p>For thirty-five girls, the Selection is the chance of a lifetime. The opportunity to escape the life laid out for them since birth.</p>
                <a link rel="stylesheet" href="https://www.goodreads.com/book/show/10507293-the-selection" target="_blank" class="btn">Read More</a>
            </div>
          </div>
        </div>

</body>
</html>
<?php
}else{
  header("Location: userlogin.php");
  exit();
}
?>