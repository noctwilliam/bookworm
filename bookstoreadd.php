<?php
require "conec.php";

if (isset($_POST['save'])) {
    $bookstore_ID = $_POST['bookstoreid'];
    $bookstore_name = $_POST['bookstorename'];
    $bookstore_location = $_POST['bookstorelocation'];

    $sql = "INSERT INTO bookstores (bookstore_id,bookstore_name,bookstore_location) VALUES ('$bookstore_ID','$bookstore_name','$bookstore_location')";

    if (mysqli_query($conec, $sql)) {
?>
        <script type="text/javascript">
            alert("Bookstores succesfully added");
        </script>
<?php
        header('Location:bookstoredisplay.php'); //belum buat lagi display ni
    } else {
        echo "Failed to add bookstores";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/table.css">
    <title>Bookstore Entry Form</title>
</head>

<body>
    <br><br><br>
    <h1 align="center">Bookstore Entry Form</h1>
    <form action="bookstoreadd.php" method="post">
        <table border="2" width="50%" align="center" id="header">
            <tr>
                <td><label>Bookstore ID</label></td>
                <td><input type="text" name="bookstoreid" placeholder="Bookstore ID"></td>
            </tr>
            <tr>
                <td> <label>Bookstore Name</label></td>
                <td> <input type="text" name="bookstorename" placeholder="Bookstore Name"> </td>
            </tr>
            <tr>
                <td> <label>Bookstore Location</label> </td>
                <td> <input type="text" name="bookstorelocation" placeholder="Bookstore Location"> </td>
                </div>
            </tr>
                <td colspan="2" align="center"> <input type="submit" name="save" value="Submit"> </td>
            </tr>
        </table>
    </form>

    </table>
</body>

</html>