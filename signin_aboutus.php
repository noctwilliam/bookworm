<?php
require "cnct.php";

if (isset($_POST['save'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  $sql = "INSERT INTO contactform (firstname,lastname,email, subject) VALUES ('$firstname', '$lastname','$email','$subject')";
  $execute = mysqli_query($cnct, $sql);

  if ($execute) {
    echo "has been send";
    header('Location:signin_aboutus.php');
    echo "has been send";
  } else {
    echo "Fail to add data";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ABOUT US</title>
  <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/stylenixon.css">
</head>
<nav>
  <div class="logo">
    <h4>The Bookworm</h4>
  </div>
  <ul class="nav-links">
    <li><a href="signin_homepage.php">Home</a></li>
    <li><a href="signin_aboutus.php">About Us</a></li>
    <li><a href='homepage.php'; id="myButton" class="float-left submit-button">Logout</a></li>
  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<script src="main.js"></script>


<body>
  <div class="about-section">
    <h1>About Us </h1>
    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">The Bookworm is an online book repository that aims to provide to the customer a seamless reading experience that
      ease them through their reading of ebook, however if any customer so desire to buy a physical copy,
      we also include location of the bookstore that have the books that they want.</p>
    <p></p>
  </div>


  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <div class="container">
          <h2>Harith Azmi</h2>
          <p class="title">CEO & Founder</p>
          <p>Email: harith2312@gmail.com</p>
          <p>Contact no: +60 19-758 7365</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <div class="container">
          <h2>Aliff Iman</h2>
          <p class="title">Web Designer</p>
          <p>Email: aliffiman2906@gmail.com</p>
          <p>Contact no: +60 12-779 4565 </p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <div class="container">
          <h2>Ahmad Raziq</h2>
          <p class="title">Web Designer</p>
          <p>Email: raziqrohaizad08@gmail.com</p>
          <p>Contact no: +60 13-320 4769</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <div class="container">
          <h2>Nixon</h2>
          <p class="title">Database Designer & Writer</p>
          <p>Email: nixonnyangau01@gmail.com</p>
          <p>Contact no: +60 18-315-9545</p>
        </div>
      </div>
    </div>
  </div>

  <div class="about-section">
    <h1>Contact Us</h1>
    <p>Any queries or book request? Please just fill out the form below.</p>
    <p></p>
  </div>

  <div class="containerr">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

      <label for="firstname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lastname">Last Name</label>
      <input type="text" id="lastname" name="lastname" placeholder="Your last name..">

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Your Email..">

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <td align="center"> <input type="submit" name="save" value="Submit"></button> </td>

    </form>
  </div>
  <div class="about-section">
    <h1></h1>
    <p></p>
    <p></p>
  </div>
</body>

</html>