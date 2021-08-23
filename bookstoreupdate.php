<?php
require "conec.php";
$bookstoreid = $_GET['bookstore_id'];
$sql_read = "SELECT * FROM bookstores WHERE bookstore_id = '$bookstoreid'";
$exe_read = mysqli_query($conec, $sql_read);
$res_read = mysqli_fetch_assoc($exe_read);

if (isset($_POST['update'])) {
    $val_bookstoreid = $_POST['bookstoreid'];
    $val_bookstorename = $_POST['bookstorename'];
    $val_bookstorelocation = $_POST['bookstorelocation'];

    $sql = "UPDATE bookstores SET
        bookstore_id = '$val_bookstoreid',
        bookstore_name = '$val_bookstorename',
        bookstore_location = '$val_bookstorelocation' WHERE bookstore_id = '$bookstoreid'";

    $execute = mysqli_query($conec, $sql);

    if ($execute) {
?>
        <script type="text/javascript">
            alert("Bookstore updated succesfully");
        </script>
    <?php
        header('Location:bookstoredisplay.php');
    } else {
    ?>
        <script type="text/javascript">
            alert("Bookstore update failed");
        </script>
<?php
        header('Location:bookstoredisplay.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Updating Bookstores</title>
</head>

<body>
    <br><br><br>
    <div align="center">
        <h1>Updating Bookstore Data</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table border="1" id="header">
                <tr>
                    <td><label>Bookstore ID</label></td>
                    <td><input type="text" name="bookstoreid" value="<?= $res_read['bookstore_id'] ?>"></td>
                </tr>
                <tr>
                    <td> <label>Book Title</label> </td>
                    <td> <input type="text" name="bookstorename" value="<?= $res_read['bookstore_name'] ?>"> </td>
                </tr>
                <tr>
                    <td> <label>Book Author</label> </td>
                    <td> <input type="text" name="bookstorelocation" value="<?= $res_read['bookstore_location'] ?>"> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="update" value="Update" class="button"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>