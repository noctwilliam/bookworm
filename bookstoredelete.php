<?php
	require "conec.php";
	$bookstoreid = $_GET['bookstore_id'];
	$sql = "DELETE FROM bookstores WHERE bookstore_id='$bookstoreid'";
	$execute = mysqli_query($conec,$sql);

	if ($execute) {
		header("Location:bookstoredisplay.php");
	}
	else{
		echo "Fail to delete";
	}

?>
