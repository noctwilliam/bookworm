<?php
	require "conec.php";
	$authorid = $_GET['author_id'];
	$sql = "DELETE FROM authors WHERE author_id='$authorid'";
	$execute = mysqli_query($conec,$sql);

	if ($execute) {
		header("Location:authordisplay.php");
	}
	else{
		echo "Fail to delete";
	}

?>
