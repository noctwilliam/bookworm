<!DOCTYPE html>
<html>
  <head>
	<title>The Bookworm</title>
  <style>

  body {
background: #CCCFBD;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
flex-direction: column;
}

*{
font-family: sans-serif;
box-sizing: border-box;
}

form {
text-align: center;
width: 300px;
border: 2px solid #ccc;
padding: 30px;
background: #fff;
border-radius: 15px;
}

h2 {
text-align: center;
margin-bottom: 20px;
}

  button {
  float: center;
  background-color: #AEAF96;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-left: 10px;
  margin-right: 10px;
  border: none;
  opacity: 0.8;
  }

  button:hover {
  	opacity: 1;
  }

  .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
  }

  hr {
  	border: 1px solid #f1f1f1;
  	margin-bottom: 10px;
  }

</style>

<!--ni header kau harith-->
    <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylenixon.css">
</head>
<nav>
    <div class="logo">
        <h4>The Bookworm</h4>
    </div>
    <ul class="nav-links">
    <li><a href="homepage.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="userlog.php">Login</a></li>
        <li><a href="adminlog.php">Admin</a></li>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
<script src="main.js"></script>
<body>
  <form class="" action="site.php" method="post">
    <h2></h2>
    <p>You have been logged out.</p>

    <hr>
<button onclick="location.href='signup.php'" type="button">Sign Up</button>
<button onclick="location.href='userlogin.php'" type="button">Log In</button>
</form>
</body>
</html>
