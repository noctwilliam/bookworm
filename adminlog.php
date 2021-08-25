<!--ni untuk admin nak log in authenticating la somthing liek dat -->
<!--yang kau kena tukar is "Location: ../rumahbaru.php" ke kau punya ah
and also-->
<?php
session_start();
include "cnct.php";

if (isset($_POST['username']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}       

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: adminlogin.php?error=User Name is required");
		exit();
	}else if(empty($password)){
        header("Location: adminlogin.php?error=Password is required");
		exit();
	}else{
    	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

		$result = mysqli_query($cnct, $sql);
		
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
				$_SESSION['username'] = $row['username'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: rumahbaru.php");
				exit();
            }
			else{
				header("Location: adminlogin.php?error=Incorect User name or password");
				exit();
			}
        }
		else{
			header("Location: adminlogin.php?error=Incorect User name or password");
            exit();
        }
    }
}
else{
	header("Location: adminlogin.php");
    exit();
}
?>
