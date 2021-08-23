<?php
	require "conec.php";
	$bookID = $_GET['bookID'];
	$sql = "DELETE FROM books WHERE bookID='$bookID'";
	$execute = mysqli_query($conec,$sql);

	if ($execute) {
		header("Location:display.php");
	}
	else{
		echo "Fail to delete";
	}

?>
