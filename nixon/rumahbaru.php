<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Menu</title>
	<center>
		<h1>Hello Admin</h1>
	</center>
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<ul>
		<li><a href="display.php">Manage Books</a></li>
		<li><a href="bookstoredisplay.php">Manage Bookstore</a></li>
		<li><a href="authordisplay.php">Manage Author</a></li>
		<li><a href="adminuserdisplay.php">Manage User</a></li>
		<li><a href="signup/logoutpage.php">Logout</a></li>
	</ul>
</body>
</html>
<?php 
}else{
     header("Location: adminlogin.php");
     exit();
}
 ?>