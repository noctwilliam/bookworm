<?php
	require "conec.php";
	$sql = "SELECT * FROM books";
	$execute = mysqli_query($conec, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display Books</title>
</head>

<body>
	<br><br><br>
	<h1 align="center">Books List</h1>
	<div align="center">
		<form action="searchby.php" method="POST">
			<input type="text" name="valueToSearch" placeholder="Search">
			<button type="submit" name="search" class="button">Search</button>
		</form>
		<br><br><br>
	</div>
	<table border="1" width="80%" align="center">
		<thead id="header">
			<th>Book ID</th>
			<th>Book Title</th>
			<th>Book Author</th>
			<th>Book Genre</th>
			<th>Book Year</th>
			<th>Book Price</th>
			<th>Book Publisher</th>
			<th>Actions</th>
		</thead>
		<?php while ($result = mysqli_fetch_array($execute)) { ?>
			<tr align="center">
				<td><?php echo $result['bookID'] ?></td>
				<td><?php echo $result['bookTitle'] ?></td>
				<td><?php echo $result['bookAuthor'] ?></td>
				<td><?php echo $result['bookGenre'] ?></td>
				<td><?php echo $result['bookYear'] ?></td>
				<td><?php echo $result['bookPrice']?></td>
				<td><?php echo $result['bookPublisher'] ?></td>
				<td>
					<a href="update.php?bookID=<?php echo $result['bookID'] ?>"><button class="button">Update</button></a>
					|
					<a href="delete.php?bookID=<?php echo $result['bookID'] ?>"><button class="button">Delete</button></a>
				</td>
			</tr>
		<?php } ?>
		<td colspan="8"><a href="ebook.php"> <button class="button">Add Books</button></a> | <a href="rumahbaru.php"><button class="button">Return to dashbar</button></a></td>
	</table>
	<br><br><br>
</body>

</html>