<?php
require "conec.php";
$bookID = $_GET['bookID'];
$sql_read = "SELECT * FROM books WHERE bookID='$bookID'";
$exe_read = mysqli_query($conec, $sql_read);
$res_read = mysqli_fetch_assoc($exe_read);

if (isset($_POST['update'])) {
  $val_bookID = $_POST['bookID_input'];
  $val_bookTitle = $_POST['bookTitle_input'];
  $val_bookAuthor = $_POST['bookAuthor_input'];
  $val_bookGenre = $_POST['bookGenre_input'];
  $val_bookYear = $_POST['bookYear_input'];
  $val_bookPrice = $_POST['bookPrice_input'];
  $val_bookPublisher = $_POST['bookPublisher_input'];

  $sql = "UPDATE books SET
    bookID = '$val_bookID',
    bookTitle = '$val_bookTitle',
    bookAuthor = '$val_bookAuthor',
    bookGenre = '$val_bookGenre',
    bookYear = '$val_bookYear',
    bookPrice = '$val_bookPrice',
    bookPublisher = '$val_bookPublisher' WHERE bookID='$bookID'";

  $execute = mysqli_query($conec, $sql);

  if ($execute) {
    header('Location:display.php');
  } else {
    echo "Updating data failed.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Update</title>
  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body>
  <br><br><br>
  <div align="center">
    <h1>Updating Books Data</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <table border="1" id="header">
        <tr>
          <td><label>Book ID</label></td>
          <td><input type="text" name="bookID_input" value="<?= $res_read['bookID'] ?>"></td>
        </tr>
        <tr>
          <td> <label>Book Title</label> </td>
          <td> <input type="text" name="bookTitle_input" value="<?= $res_read['bookTitle'] ?>"> </td>
        </tr>
        <tr>
          <td> <label>Book Author</label> </td>
          <td> <input type="text" name="bookAuthor_input" value="<?= $res_read['bookAuthor'] ?>"> </td>
        </tr>
        <tr>
          <td> <label>Book Genre</label> </td>
          <td> <input type="text" name="bookGenre_input" value="<?= $res_read['bookGenre'] ?>"> </td>
        </tr>
        <tr>
          <td> <label>Book Year</label> </td>
          <td> <input type="date" name="bookYear_input" value="<?= $res_read['bookYear'] ?>"> </td>
        </tr>
        <tr>
          <td><label>Book Price</label></td>
          <td><input type="text" name="bookPrice_input" value="<?= $res_read['bookPrice'] ?>"></td>
        </tr>
        <tr>
          <td> <label>Book Publisher</label> </td>
          <td> <input type="text" name="bookPublisher_input" value="<?= $res_read['bookPublisher'] ?>"> </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="submit" name="update" value="Update"> </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>