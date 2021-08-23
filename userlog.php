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
		header("Location: userlogin.php?error=User Name is required");
		exit();
	}
	else if(empty($password)){
        header("Location: userlogin.php?error=Password is required");
		exit();
	}
	else{
    	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

		$result = mysqli_query($cnct, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
				$_SESSION['username'] = $row['username'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: signin_homepage.php");
				exit();
            }
			else{
				header("Location: userlogin.php?error=Incorect User name or password");
				exit();
            }
        }
		else{
			header("Location: userlogin.php?error=Incorect User name or password");
			exit();
        }
    }
}
else{
	header("Location: userlogin.php");
    exit();
}
?>
