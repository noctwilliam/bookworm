<?php
require "conec.php";

if (isset($_POST['save'])) {
  $bookID = $_POST['bookID'];
  $bookTitle = $_POST['bookTitle'];
  $bookAuthor = $_POST['bookAuthor'];
  $bookGenre = $_POST['bookGenre'];
  $bookYear = $_POST['bookYear'];
  $bookPrice = $_POST['bookPrice'];
  $bookPublisher = $_POST['bookPublisher'];

  $sql = "INSERT INTO books (bookID, bookTitle,bookAuthor,bookGenre,bookYear, bookPrice,bookPublisher)
  VALUES ('$bookID', '$bookTitle', '$bookAuthor', '$bookGenre','$bookYear','$bookPrice', '$bookPublisher')";

  if (mysqli_query($conec, $sql)) {
    echo "Data succesfully added";
    header('Location:display.php');
  } else {
    echo "Failed to add data";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/table.css">
  <title>Book Entry Form</title>
</head>

<body>
  <br><br><br>
  <h1 align="center">Book Entry Form</h1>
  <form action="ebook.php" method="post">
    <table border="2" width="50%" align="center" id="header">
      <tr>
        <td><label>Book ID</label></td>
        <td><input type="text" name="bookID" placeholder="Book ID"></td>
      </tr>
      <tr>
        <td> <label>Book Title</label></td>
        <td> <input type="text" name="bookTitle" placeholder="Title"> </td>
      </tr>
      <tr>
        <td> <label>Author</label> </td>
        <td> <input type="text" name="bookAuthor" value="" placeholder="Author's"> </td>
        </div>
      </tr>
      <tr>
        <td> <label>Genre</label> </td>
        <td> <input type="text" name="bookGenre" value="" placeholder="Genre"> </td>
        </div>
      <tr>
        <td> <label>Year</label> </td>
        <td> <input type="date" name="bookYear" value=""> </td>
        </div>
      </tr>
      <tr>
        <td><label>Price</label></td>
        <td><input type="text" name="bookPrice" value="" placeholder="Price"></td>
      </tr>
      <tr>
        <td> <label>Publisher</label> </td>
        <td> <input type="text" name="bookPublisher" value="" placeholder="Publisher"> </td>
      </tr>
      <tr>
        <td colspan="2" align="center"> <input type="submit" name="save" value="Submit"> </td>
      </tr>
    </table>
  </form>

  </table>
</body>

</html>