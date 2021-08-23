<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['firstname']; ?></h1>
     <button onclick="location.href = 'userlogout.php';" id="myButton" class="float-left submit-button" >User Logout</button>
     <button onclick="location.href = 'adminlogout.php';" id="myButton" class="float-left submit-button" >Admin Logout</button>
</body>
</html>

<?php
}else{
     header("Location: userlogin.php");
     exit();
}
 ?>
